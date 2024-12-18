<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
<nav id="navScroll" class="navbar navbar-dark bg-black fixed-top px-vw-5" tabindex="0">
    <div class="container">
        @if (Auth::guard('sponsor')->check())
            @if (auth()->guard('sponsor')->check())
                <a class="navbar-brand col-12 col-md-auto text-center" href="{{route('sponsorprofile', auth()->guard('sponsor')->id())}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack"
                        viewBox="0 0 16 16">
                        <path
                            d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                        <path
                            d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                    </svg>
                    <span class="ms-md-1 mt-1 fw-bolder">SPONSTORE</span>
                </a>
            @endif
        @elseif (Auth::guard()->check())
            <a class="navbar-brand col-12 col-md-auto text-center" href="{{route('home')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack"
                    viewBox="0 0 16 16">
                    <path
                        d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                    <path
                        d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                </svg>
                <span class="ms-md-1 mt-1 fw-bolder">SPONSTORE</span>
            </a>
        @else
            <a class="navbar-brand col-12 col-md-auto text-center" href="{{route('home')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack"
                    viewBox="0 0 16 16">
                    <path
                        d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                    <path
                        d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                </svg>
                <span class="ms-md-1 mt-1 fw-bolder">SPONSTORE</span>
            </a>
        @endif

        <ul class="navbar-nav mb-2 mb-lg-0 list-group list-group-horizontal">
            <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                @if (Auth::guard()->check())
                    <a class="nav-link" href="{{ url('/home') }}" aria-label="Homepage">
                        Home
                    </a>
                @endif
            </li>
            <li class="nav-item {{ request()->is('profile*') || request()->is('sponsorprofile*') ? 'active' : '' }}">
                @if (Auth::guard('sponsor')->check())
                    <!-- Sponsor Profile Link -->
                    <a class="nav-link" href="{{ route('sponsorprofile', Auth::guard('sponsor')->user()->id) }}">
                        Profile
                    </a>
                @elseif (Auth::check())
                    <!-- User Profile Link -->
                    <a class="nav-link" href="{{ route('profile', Auth::user()->id) }}" aria-label="A sample content page">
                        Profile
                    </a>
                @endif
            </li>
            <li class="nav-item {{ request()->is('inbox') || request()->is('inboxuser') ? 'active' : '' }}">
                @if (Auth::guard('sponsor')->check())
                    <a class="nav-link" href="{{ url('/inbox') }}" aria-label="A system message page">
                        Inbox
                    </a>
                @elseif (Auth::guard()->check())
                    <a class="nav-link" href="{{ url('/inboxuser') }}" aria-label="A system message page">
                        Inbox
                    </a>
                @endif
            </li>
            <li class="nav-item {{ request()->is('sent') ? 'active' : '' }}">
                @if (Auth::guard()->check())
                    <a class="nav-link" href="{{ url('/sent') }}" aria-label="A system message page">
                        Sent
                    </a>
                @endif
            </li>
            <li class="nav-item">
                @if (Auth::guard('sponsor')->check())
                    <a class="nav-link" style="font-weight: 700; color: aquamarine" aria-label="A system message page">
                        Hello, {{Auth::guard('sponsor')->user()->name}}
                    </a>
                @elseif (Auth::guard()->check())
                    <a class="nav-link" style="font-weight: 700; color: aquamarine" aria-label="A system message page">
                        Hi, {{Auth::guard()->user()->name}}
                    </a>
                @else
                    <p class="nav-link" style="font-weight: 555; color:aliceblue" aria-label="A system message page">Welcome to our page!</p>
                @endif
            </li>
        </ul>

        @if (Auth::guard()->check() && request()->is('home'))
            <form action="/search" class="d-flex me-3" role="search">
                <div class="input-group" style="display: flex; align-items: center; border-right: none; border-radius: 5px 0 0 5px;">
                    <input name="search" class="form-control" style="border-radius: 0;" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" style="border-radius: 0;" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        @endif

        @if (Auth::guard('sponsor')->check() || Auth::guard()->check())
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" style="color: red; border-radius: 15px;" aria-label="Download this template" class="btn btn-outline-light">
                    <small>Log Out</small>
                </button>
            </form>
        @else
            <a href="{{ url('/') }}" style="color: greenyellow" aria-label="Download this template" class="btn btn-outline-light">
                <small>Log In</small>
            </a>
        @endif
    </div>
</nav>
