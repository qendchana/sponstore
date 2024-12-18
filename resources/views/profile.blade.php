<x-layout>
  <x-navbar/>
  <main class="mt-5">
    <div class="container">
      <div class="row d-flex justify-content-center py-vh-5 pb-0">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="row">
            <div class="col-12">
              <h1 class="display-3 fw-bold">{{ $user->name }}</h1>
              <p class="profile" data-aos="fade-up">{{ $user->email }}</p>
              <span class="h3 text-secondary fw-lighter">Events</span>
            </div>
          </div>
        </div>
        @if($events && $events->count() > 0)
          @foreach($events as $e)
            <div class="col-12 col-lg-10 col-xl-8">
              <div class="row d-flex align-items-start" data-aos="fade-right">
                <div class="col-12 col-lg-7">
                  <h2 class="h3 mt-5 border-top pt-5">{{ $e->name }}</h2>
                  <p class="text-secondary">{{ $e->description }}</p>
                </div>
                <div class="col-12 col-lg-4 offset-lg-1 bg-gray-900 p-5 mt-5">
                  <h3 class="h6 text-secondary"><i class="fa-solid fa-calendar-days"></i>{{ $e->date }}</h3>
                  <p class="text-secondary"><i class="fa-solid fa-location-dot"></i>{{ $e->location }}</p>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <p class="text-secondary text-center mt-5">No events found.</p>
        @endif

      <div class="row d-flex align-items-start justify-content-center text-muted" data-aos="fade">
        <div class="col-12 col-lg-10 col-xl-9">
          <div class="p-5 small">
            <!-- <p>*At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore
              et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
              Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd
              gubergren, no sea takimata sanctus est Lorem
              ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
              dolore magna aliquyam erat. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
              gubergren, no sea takimata sanctus est Lorem
              ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
              Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
              erat.</p> -->
          </div>
        </div>
      </div>

      <a href="/showeventform" aria-label="Add Event"
          class="btn btn-outline-light submitButton">
          <small>Add Event</small>
      </a>
    </div>


  </main>

  <x-footer/>
</x-layout>
