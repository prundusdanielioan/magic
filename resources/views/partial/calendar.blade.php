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
                <h5 class="modal-title">Fa o rezervare</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hide()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="usr">Telefon:</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="usr">Mesaj:</label>
                    <textarea name="message" class="form-control" id="message"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save" onclick="onSubmit()">Save changes</button>
                <button type="button" class="btn btn-danger" id="delete" onclick="onDelete()">Delete</button>
                <button type="button" class="btn btn-info" id="update" onclick="onUpdate()">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hide()">Close</button>
                <input type="hidden" name="id" id="recordNo">
            </div>
        </div>
    </div>
</div>
<script>
    function checkRecord() {
        const recordNo = document.getElementById('recordNo').value;
        const saveButton = document.getElementById('save');
        const deleteButton = document.getElementById('delete');

        if (parseInt(recordNo) > 0) {
            saveButton.style.display = 'none';
            deleteButton.style.display = 'inline-block';
        } else {
            saveButton.style.display = 'inline-block';
            deleteButton.style.display = 'none';
        }
    }

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
        const phone = $('#phone').val()
        const message = $('#message').val()
        doPost(name, phone, message, start, end)
    }

    function onDelete() {
        var deleteMsg = confirm("Do you really want to delete?");
        if (deleteMsg) {
            const recordNo = $('#recordNo').val()
            doDelete(recordNo)
        }
    }

    function onUpdate() {
        const recordNo = $('#recordNo').val()
        const name = $('#name').val()
        const phone = $('#phone').val()
        const message = $('#message').val()
        doUpdate(name, phone, message, start, end, recordNo)
    }

    function doDelete(recordNo) {
        $.ajax({
            type: "POST",
            url: SITE_URL + '/rezervari',
            data: {
                id: recordNo,
                type: 'delete'
            },
            success: function (response) {
                $('#recordNo').val('')
                checkRecord();
                calendar.fullCalendar('removeEvents', recordNo);
                displayMessage("Event Deleted Successfully");
                hide()
            }
        });
    }

    function show(startDate, endDate) {
        start = startDate
        start = endDate
        $('#recordNo').val('')
        checkRecord()
        $('#details').modal('show')

    }

    function hide() {
        $('#details').modal('hide')

    }

    function doPost(name, phone, message, startDate, endDate) {
        $.ajax({
            url: SITE_URL + "/rezervari",
            data: {
                title: name,
                phone: phone,
                message: message,
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

    function doUpdate(name, phone, message, startDate, endDate, recordNo) {
        $.ajax({
            url: SITE_URL + "/rezervari",
            data: {
                title: name,
                phone: phone,
                message: message,
                id: recordNo,
                type: 'update'
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
                $('.modal-title').html('Fa o rezervare')

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
                // var deleteMsg = confirm("Do you really want to delete?");
                // if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: SITE_URL + '/rezervari',
                    data: {
                        id: event.id,
                        type: 'view'
                    },
                    success: function (response) {
                        console.log(response)
                        $('#name').val(response.title)
                        $('#phone').val(response.phone)
                        $('#message').val(response.message)
                        $('.modal-title').html('Detalii rezervare')
                        show(response.start, response.end)
                        $('#recordNo').val(response.id)
                        checkRecord();

                        // calendar.fullCalendar('removeEvents', event.id);
                        // displayMessage("Event Deleted Successfully");
                    }
                });
                // }
            }

        });
    }

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

</script>

