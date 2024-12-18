<x-layout>
    <div class="d-flex flex-row align-items-left">
        <span class="back">&lt;</span>
        <a href="{{ url()->previous()}}" class="backs">Back</a>
    </div>

    <div class="d-flex flex-column align-items-center gap-4">
        <h3 class="desc">Add your event! Fill in the details!</h3>
        <div class="cards">
            @if ($errors->any())
                <div class="alert alert-danger" style="color: #ED4337;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Display flash error message -->
            @if(session('error'))
                <div class="alert alert-danger" style="color: #ED4337;">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card-body">
                <form action="/eventform" method="POST">
                @csrf
                    <div class="row mb-3">
                        <label for="eventName" class="col-sm-2 col-form-label">Event Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="eventName" name="name" placeholder="Enter Event Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="eventDate" class="col-sm-2 col-form-label">Event Date (D-Day)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="eventDate" name="date" placeholder="mm/dd/yyyy">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="eventDescription" class="col-sm-2 col-form-label">Event Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="eventDescription" name="description" rows="5" placeholder="Enter event description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="eventLocation" class="col-sm-2 col-form-label">Event Location</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="eventLocation" name="location" rows="3" placeholder="Enter event Location"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-white btn-l mb-4" style="font-size:15px;">Add Event</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        flatpickr("#eventDate", {
            dateFormat: "m/d/Y",
            placeholder: "mm/dd/yyyy",
        });
    </script>
</x-layout>
