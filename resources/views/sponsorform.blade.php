<x-layout>
    <div class="d-flex flex-row align-items-left">
        <span class="back">&lt;</span>
        <a href="{{ url()->previous()}}" class="backs">Back</a>
    </div>

    <div class="d-flex flex-column align-items-center gap-4">
        <h3 class="desc">Add Sponsor!</h3>

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

        <div class="cards">
            <div class="card-body">
                <form action="/sponsorform" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="sponsorName" class="col-sm-2 col-form-label">Upload Brand Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="image" type="file" id="sponsorName" placeholder="Enter Event Name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sponsorName" class="col-sm-2 col-form-label">Sponsor Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" type="text" id="sponsorName" placeholder="Enter sponsor name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sponsorLocation" class="col-sm-2 col-form-label">Sponsor Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="sponsorEmail" name="email" placeholder="Enter sponsor email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sponsorLocation" class="col-sm-2 col-form-label">Sponsor Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" id="sponsorEmail" name="password" placeholder="Enter sponsor password" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sponsorPhoneNum" class="col-sm-2 col-form-label">Sponsor Phone Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="sponsorPhoneNum" name="phoneNum" placeholder="Enter sponsor phone number" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sponsorDescription" class="col-sm-2 col-form-label">Sponsor Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="sponsorDescription" name="description" rows="5" placeholder="Enter sponsor description" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-white btn-l mb-4" style="font-size:15px;">Add Sponsor</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
