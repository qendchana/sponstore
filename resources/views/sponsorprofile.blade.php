<x-layout>
  <x-navbar/>
  <main>
    <div class="container">
      <div class="row d-flex justify-content-center py-vh-5 pb-0">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="row">
            <div class="col-12">
              <h1 class="display-1 fw-bold mb-5">
                <br>
                {{$sponsor->name}}
                <!-- <br> -->
                <br>
                <!-- nama company -->
              </h1>
              <div class="row d-flex align-items-center">

                <div class="col-12 col-lg-7">
                  <img class="img-fluid rounded-5 mb-n5 shadow" src="{{asset('storage/'. $sponsor->image)}}" width="512" height="512"
                    alt="a nice person" loading="lazy" data-aos="zoom-in-right">
                    <br><br><br>
                </div>
                <div class="col-12 col-lg-5 bg-dark rounded-5 py-5" data-aos="fade">
                  <span class="h5 text-secondary fw-lighter">{{$sponsor->email}}</span>
                  <!-- tagline -->
                  <h2 class="display-4 fs-4"> {{$sponsor->description}}</h2>

                </div>
              <br>

              <p class="lead border-top pt-5 mt-5" data-aos="fade-up">PT Gojek Indonesia is an Indonesian on-demand multi-service platform and digital payment technology group based in Jakarta.
                Gojek was first established in Indonesia in 2009 as a call center to connect consumers to courier delivery and two-wheeled ride-hailing services.
                Gojek launched its application in 2015 with only four services: GoRide, GoSend, GoShop, and GoFood. Valued at US$10 billion today, Gojek has transformed into a super app, providing more than 20 services.
              </p>
            </div>
          </div>
        </div>
        <div class="row d-flex align-items-start justify-content-center py-vh-3 text-muted" data-aos="fade">
        <div class="col-12 col-lg-10 col-xl-9">
          <div class="p-5 small bg-gray-900">
            <p>*At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore. </p>
          </div>
        </div>

  </main>

  <x-footer/>
</x-layout>
