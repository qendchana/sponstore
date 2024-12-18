<!doctype html>
<html class="h-100" lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="A well made and handcrafted Bootstrap 5 template">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png')  }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
    <meta name="author" content="Holger Koenemann">
    <meta name="generator" content="Eleventy v2.0.0">
    <meta name="HandheldFriendly" content="true">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
  </head>

  <body class="d-flex h-100 w-100 bg-black text-white" data-bs-spy="scroll" data-bs-target="#navScroll">

    <div class="h-100 container-fluid">
      <div class="h-100 row d-flex align-items-stretch">

          <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-start flex-column px-vw-5">

            <header class="mb-auto py-vh-2 col-12">
              <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                  <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                  <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                </svg>
                <span class="ms-md-1 mt-1 fw-bolder me-md-5">SPONSTORE</span>
              </a>

            </header>

            <main class="mb-auto col-12">
              <h1>Login to your account</h1>

                <!-- Display validation errors if any -->
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

              <form class="row" action="{{route('login')}}" method="POST">
                @csrf
                <div class="col-12">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" placeholder="Email@mail.com" class="form-control form-control-lg bg-gray-800 border-dark reglogbar" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" placeholder="Password" class="form-control form-control-lg bg-gray-800 border-dark reglogbar" id="exampleInputPassword1">
                </div>
                <div>
                    <a href="/register" style="color: #21c4da">Create an account...</a>
                </div>
                <br><br>
                <button type="submit" class="btn btn-white btn-xl mb-4">Submit</button>
              </div>
              </form>

            </main>
          </div>

        <div class="col-12 col-md-5 col-lg-6 col-xl-7 gradient"></div>

      </div>

    </div>
  </body>
</html>
