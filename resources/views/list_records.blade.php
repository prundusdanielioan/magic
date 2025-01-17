@php use Carbon\Carbon; @endphp
@include('base')
<div class="card">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Event List</h3>
            </div>
            <div class="card-body">
                @if($events->isEmpty())
                    <p class="text-muted">No events available.</p>
                @else
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->start }}</td>
                                <td>{{ $event->end }}</td>
                                <td>{{ $event->phone }}</td>
                                <td>{{ $event->message }}</td>
                                <td>{{ Carbon::parse($event->created_at)->format('Y-m-d H:i') }}</td>
                                <td>{{ Carbon::parse($event->updated_at)->format('Y-m-d H:i') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

@include('partial.footer')
