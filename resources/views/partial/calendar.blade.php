<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
<div class="container">
    <div id='calendar'></div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="details">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hide()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control" id="name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="onSubmit()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hide()">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    let start = null
    let end = null
    let calendar = null
    const SITE_URL = "{{ url('/') }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function onSubmit() {
        const name = $('#name').val()
        doPost(name, start, end)
    }

    function show(startDate, endDate) {
        start = startDate
        start = endDate
        $('#details').modal('show')

    }

    function hide() {
        $('#details').modal('hide')

    }

    function doPost(name, startDate, endDate) {
        $.ajax({
            url: SITE_URL + "/rezervari",
            data: {
                title: name,
                start: startDate._i,
                end: startDate._i,
                type: 'add'
            },
            type: "POST",
            success: function () {
                location.reload();
            },
            error: function (xhr, status, error) {
                console.error("Error occurred: " + error);
            }
        });
    }

    $(document).ready(function () {
        loadCalendar()
    });

    function loadCalendar() {
        calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITE_URL + "/rezervari",
            displayEventTime: false,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                show(start, end)
            },
            eventDrop: function (event, delta) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                $.ajax({
                    url: SITE_URL + '/rezervari',
                    data: {
                        title: event.title,
                        start: start,
                        end: end,
                        id: event.id,
                        type: 'update'
                    },
                    type: "POST",
                    success: function (response) {
                        displayMessage("Event Updated Successfully");
                    }
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITE_URL + '/rezervari',
                        data: {
                            id: event.id,
                            type: 'delete'
                        },
                        success: function (response) {
                            calendar.fullCalendar('removeEvents', event.id);
                            displayMessage("Event Deleted Successfully");
                        }
                    });
                }
            }

        });
    }

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

</script>

