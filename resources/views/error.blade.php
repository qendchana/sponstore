<x-layout>
    <main>
        <div class="bg-black">
            <div class="container px-vw-5 py-vh-5">
                <div class="row d-flex flex-column align-items-center">
                    <div class="col-12 col-lg-8 text-center text-lg">
                        <span class="h5 text-secondary fw-lighter">Error Occurred</span>
                        <h2 class="display-4">Something went wrong</h2>
                    </div>
                    <div class="col-12 col-lg-7 bg-dark rounded-5 py-vh-3 text-center my-5">
                        <h2 class="display-huge mb-5 text-danger">Error {{ $statusCode ?? 500 }}</h2>
                        <p class="lead text-secondary">
                            {{ $errorMessage ?? 'An unexpected error occurred.' }}
                        </p>
                        <a href="{{route('home')}}" class="btn btn-light" style="padding: 13px 25px;">Go To Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
