<x-layout>
  <x-navbar />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <main style="background-color: none;">
    <div class="container text-light">
      <br><br><br><br>
      <section class="content inbox">
        <nav class="searchnavbar navbar-dark">
          <form class="form-inline d-flex flex-row" >
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search" style="margin-right: 20px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
        <div class="row mb-3">
          <form action="/inboxuser" method="GET" id="eventFilterForm" class="col-sm-12">
              <label for="eventSelect" class="col-sm-2 col-form-label">Pick Event</label>
              <div class="col-sm-10">
                  <select id="eventSelect" name="event_id" class="form-select" aria-label="Default select example"
                          onchange="document.getElementById('eventFilterForm').submit()">
                      <option value="" disabled {{ request()->get('event_id') ? '' : 'selected' }}>Open this select menu</option>
                      @foreach($events as $e)
                          <option value="{{ $e->id }}" {{ request()->get('event_id') == $e->id ? 'selected' : '' }}>
                              {{ $e->name }}
                          </option>
                      @endforeach
                  </select>
              </div>
          </form>
        </div>
        <div class="container-fluid">
          <div class="row clearfix">
            <div class="col-md-12 col-lg-12 col-xl-12">
              <ul class="mail_list list-group list-unstyled">
              <div class="col-12 col-lg-10 col-xl-8" style="background: none;">
                <div class="row d-flex align-items-start" style="background: none;" data-aos="fade-right">
                  <!-- start of inbox -->

                  @if($transactions->contains('negotiation', '!=', null) || $transactions->contains('status', '==', 'accepted') || $transactions->contains('status', '==', 'rejected') )
                  @foreach($transactions as $t)
                    @if($t->negotiation || $t->status === 'accepted' || $t->status === 'rejected')
                    <div class="col-12">
                      <ul class="mail_list list-group list-unstyled">
                        <li class="list-group-item unread" style="background: none; border-left: 1px solid gray;">
                            <div class="media" style="background: none;">
                            <div class="media-body">
                                <div class="media-heading">
                                @if($t->sponsor)
                                    <a href="{{route('show.sponsor', $t->sponsor->id)}}" class="m-r-10 text-light">{{ $t->sponsor->name }}</a>
                                @else
                                    <a href="{{route('home')}}" class="m-r-10 text-light">No Sponsor</a>
                                @endif

                                @if($t->status === 'pending')
                                    <span class="badge bg-warning text-dark">On check</span>
                                @elseif($t->status === 'accepted')
                                    <span class="badge bg-success text-light">Accepted</span>
                                @elseif($t->status === 'rejected')
                                    <span class="badge bg-danger text-dark">Rejected</span>
                                @elseif($t->status === 'negotiated')
                                    <span class="badge bg-warning text-light">Negotiated</span>
                                @endif
                                <small class="float-right text-muted">
                                    <time class="hidden-sm-down" style="background: none; color: white;" datetime="2017">{{$t->updated_at}}</time>
                                    <!-- <i class="zmdi zmdi-attachment-alt"></i> -->
                                </small>
                                </div>
                                <p class="msg" style="color: white;">Event: {{$t->event->name}}</p>
                                @if ($t->negotiation)
                                    <p class="msg" style="color: white;">Negotiation: {{$t->negotiation}}</p>
                                @endif
                                @if ($t->status === 'accepted')
                                    <p class="msg" style="color: rgb(88, 206, 52);">Your Proposal has been accepted, please continue by contacting the following information</p>
                                    <p class="msg" style="color: rgb(251, 255, 0);">{{$t->sponsor->name}} Phone Number: {{$t->sponsor->phoneNum}}</p>
                                @endif
                                <br>
                                </div>
                            </div>
                            </div>
                        </li>
                      </ul>
                    </div>
                    @endif
                  @endforeach
                  @else
                    <span>No transactions found...</span>
                  @endif
                </div>
              </div>
              </ul>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link bg-dark text-light border-light" href="#">Previous</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link bg-dark text-light border-light" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link bg-dark text-light border-light" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link bg-dark text-light border-light" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link bg-dark text-light border-light" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </main>
  <x-footer />
</x-layout>
