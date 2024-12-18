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

                <form id="edit-form" action="{{ route('admin.update', $sponsor->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label for="sponsorName" class="col-sm-2 col-form-label">Upload Brand Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="image" type="file" id="sponsorName" placeholder="Enter Event Name" value="{{old('image', $sponsor->image)}}">
                            @if ($sponsor->image)
                                <img src="{{asset('storage/'.$sponsor->image)}}" alt="Current Sponsor Image" style="max-width: 100%; margin-top: 10px;">
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <input type="hidden" name="id" value="{{ $sponsor->id }}">
                        <label for="name" class="col-sm-2 col-form-label">Sponsor Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" value="{{old('name', $sponsor->name)}}" placeholder="Sponsor name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Sponsor Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="email" value="{{old('email', $sponsor->email)}}" placeholder="Sponsor email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phoneNum" class="col-sm-2 col-form-label">Sponsor Phone Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="phoneNum" value="{{old('phoneNum', $sponsor->phoneNum)}}" placeholder="Sponsor phone number">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Sponsor Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="sponsorDescription" name="description" rows="5" placeholder="Enter sponsor description" required>{{old('description', $sponsor->description)}}</textarea>
                        </div>
                        {{-- <textarea name="description" placeholder="Sponsor description" required>{{old('description', $sponsor->description)}}</textarea> --}}
                    </div>

                    <button type="submit" class="btn btn-white btn-l mb-4" style="font-size:15px;">Save Changes</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
