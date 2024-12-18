<x-layout>

    <div class="d-flex flex-row align-items-left">
        <span class="back">&lt;</span>
        <a href="{{ url()->previous()}}" class="backs">Back</a>
    </div>

    <div class="d-flex flex-column align-items-center gap-4">
        <h3 class="desc">Submit your proposal!</h3>
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
                <form action="/transaction" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="eventName" class="col-sm-2 col-form-label">Pick Event</label>
                        <div class="col-sm-10">
                            <select id="eventSelect" name="event_id" class="form-control" aria-label="Default select example">
                                <option selected disabled>Please select event</option>
                                @foreach($events as $e)
                                    <option value="{{ $e->id }}">{{ $e->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="eventDate" class="col-sm-2 col-form-label">Event Date (D-Day)</label>
                        <div class="col-sm-10">
                            <input type="text" id="eventDate" class="form-control" placeholder="Event Date" readonly disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="eventDescription" class="col-sm-2 col-form-label">Event Description</label>
                        <div class="col-sm-10">
                            <textarea id="eventDescription" class="form-control" rows="5" placeholder="Event Description" readonly disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="eventLocation" class="col-sm-2 col-form-label">Event Location</label>
                        <div class="col-sm-10">
                            <textarea id="eventLocation" class="form-control" rows="3" placeholder="Event Location" readonly disabled></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> <!-- Automatically pass logged-in user ID -->
                    <input type="hidden" name="sponsor_id" value="{{$sponsor_id}}"> <!-- Example sponsor ID; adjust as needed -->

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Proposal (.pdf)</label>
                        <input class="form-control" type="file" id="formFile" name="file_path">
                    </div>

                    <button type="submit" class="btn btn-white btn-l mb-4" style="font-size:15px;">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        flatpickr("#eventDate", {
            dateFormat: "m/d/Y",
            allowInput: true // Allows manual or programmatic input
        });
    </script>

    <script>
        const eventsData = @json($events);
    </script>

    <script>
        document.getElementById('eventSelect').addEventListener('change', function () {
            const selectedEventId = this.value;

            // Find the selected event in the eventsData array
            const selectedEvent = eventsData.find(event => event.id == selectedEventId);

            if (selectedEvent) {
                // Autofill fields
                document.getElementById('eventDate').value = selectedEvent.date || '';
                document.getElementById('eventDescription').value = selectedEvent.description || '';
                document.getElementById('eventLocation').value = selectedEvent.location || '';
            }
        });
    </script>
</x-layout>
