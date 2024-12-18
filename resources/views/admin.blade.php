<x-layout>

<link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="admintitle">ADMIN DASHBOARD</h3>

        <a href="/showsponsorform" class="btn btn-outline-light addSponsor">
            <small>Add Sponsor</small>
        </a>

        @if (Auth::guard('admin')->check())
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" aria-label="Download this template" class="btn btn-outline-light addSponsor">
                    <small>Log Out</small>
                </button>
            </form>
        @endif
    </div>

    <div class="container-fluid">
        <div class="row g-0">
            @if($sponsor->isEmpty())
                <p class="text-light">No transactions found for your search.</p>
            @else
            @foreach($sponsor as $s)
                <div class="col-12 col-md-6 col-lg-3 mb-4" style="padding: 0px 15px;">
                    <div class="card bg-transparent adminCard" style="width: 100%;">
                        <img src="{{ asset('storage/'.$s->image) }}" alt="Sponsor's Image" class="card-img-top"
                        style="width:100%; height:300px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <div class="card-body" style="padding: 20px 15px; font-size: 13px; height: 260px;">
                            <h5 class="card-title">{{ $s->name }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($s->description, 100, '...') }}</p>
                            <p class="card-text">Email: {{ $s->email }}</p>
                            <p class="card-text">Phone: {{ $s->phoneNum }}</p>
                            <p class="card-text">Created: {{ $s->created_at }} Updated: {{ $s->updated_at }}</p>
                            <a href="{{ route('admin.edit', $s->id)}}" class="btn btn-primary edit-button" style="color: white;" data-id="{{ $s->id }}">Edit</a>

                            <form id="deleteForm{{ $s->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                <!-- @method('DELETE') -->
                                <button type="button" class="btn" style="color: red;" data-bs-toggle="modal" data-bs-target="#confirmationModal{{ $s->id }}">Delete</button>
                            </form>

                            <div class="modal fade" id="confirmationModal{{ $s->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                        </div>
                                        <div class="modal-body">
                                            <p id="confirmationText{{ $s->id }}">Are you sure you want to delete this sponsor?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('admin.delete', $s->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#successModal">Yes, Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="successModal" aria-labelledby="successModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="successModalLabel">Sponsor Deleted</h5>
                                        </div>
                                        <div class="modal-body" id="successMessage">
                                            Sponsor successfully deleted.
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', () => {
                                    // Attach event listeners to all delete buttons
                                    document.querySelectorAll('[id^="confirmDeleteBtn"]').forEach(button => {
                                        button.addEventListener('click', function () {
                                            const sponsorId = this.id.replace('confirmDeleteBtn', ''); // Extract ID from button
                                            const confirmationText = document.getElementById('confirmationText');
                                            const deleteForm = document.getElementById(`deleteForm${sponsorId}`);

                                            // Change text to indicate processing
                                            confirmationText.innerHTML = 'Processing...';

                                            // Submit the form
                                            deleteForm.submit();
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            <div class="pagination">
                {{ $sponsor->links('pagination::tailwind') }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show modal if a success message exists
        @if (session('success'))
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        @endif
    </script>

</x-layout>
