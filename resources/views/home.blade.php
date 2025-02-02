<x-layout>
  <x-navbar/>

  <main>
  @if(session('errorMessage'))
    <div class="alert alert-danger">
        <strong>Error!</strong> {{ session('errorMessage') }}
    </div>
  @else
      <!-- Your normal page content goes here -->
  
    <div class="w-100 overflow-hidden position-relative bg-black text-white" data-aos="fade">
      <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
      <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
        <div class="row d-flex align-items-center justify-content-center py-vh-5">
          <div class="col-12 col-xl-10">
            <span class="h5 text-secondary fw-lighter">Our Mission</span>
            <h1 class="display-huge mt-3 mb-3 lh-1">Sponsor Made Easy</h1>
          </div>
          <div class="col-12 col-xl-8">
            <p class="lead text-secondary">We are committed to bridging the gap between sponsors and organizations, streamlining the sponsorship agreement process for seamless collaboration and mutual success.</p>
          </div>
          <div class="col-12 text-center">
            <a href="#sponsors" class="btn btn-xl btn-light">Explore
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

    </div>

    <div class="w-100 position-relative bg-black text-white bg-cover d-flex align-items-center">
      <div class="container-fluid px-vw-5">
        <div class="position-absolute w-100 h-50 bg-dark bottom-0 start-0"></div>
        <div class="row d-flex align-items-center position-relative justify-content-center px-0 g-5">
          <div class="col-12 col-lg-6">
            <img src="{{ asset('assets/images/Logo_Binus_White.png') }}" width="180" height="1732" alt="abstract image"
              class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up">
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="{{ asset('assets/images/Logo_Binus_White.png') }}" width="180" height="1732" alt="abstract image"
              class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="2000">
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="{{ asset('assets/images/Logo_Binus_White.png') }}" width="180" height="1732" alt="abstract image"
              class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="3000">
          </div>
        </div>
      </div>
    </div>
    <div class="bg-dark" id="sponsors">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-7 text-lg-end" data-aos="fade-right">
            <span class="h5 text-secondary fw-lighter">Sponsors</span>
            <h2 class="display">Check out our sponsor</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black py-vh-3">
      <div class="container bg-black px-vw-3 py-vh-3 rounded-5 shadow">
        <div class="row gx-5">
          @foreach($sponsor as $s)
          <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="card bg-transparent" data-aos="zoom-in-up" style="height: 630px;">
              <div class="bg-dark shadow rounded-5 p-0 h-100 d-flex flex-column">
                <img src="{{ asset('storage/'.$s->image) }}" alt="Sponsor's Image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy" style="width: 250px; height: 270px">
                <div class="flex-grow-1" style="padding: 2.4rem;">
                  <h2 class="fw-lighter multi-line-truncate" style="height: 85px; font-size:23px;">{{ $s->name }}</h2>
                  <p class="pb-4 text-secondary" style="height: 145px; font-size:16px; overflow: hidden;">{{ $s->description }}</p>
                  <p class="email-text">{{ $s->email }}</p>
                  {{-- <a href="{{ route('sponsor.show', ['id' => $s->id]) }}" class="link-fancy link-fancy-light" style="font-size:15px">Read more</a> --}}
                  <a href="{{ route('show.sponsor', $s->id) }}" class="link-fancy link-fancy-light" style="font-size:15px">Read more</a>

                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- <div class="bg-black py-vh-3">
      <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">
        <div class="row gx-5">
          <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="card bg-transparent" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{ asset('assets/images/pocari.jpg') }}" width="582" height="327" alt="abstract image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">Ipsum dolor est</h2>
                  <p class="pb-4 text-secondary"></p>
                  <p class="h6 fw-5"></p>
                  <a href="#" class="link-fancy link-fancy-light">Read more</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="card bg-transparent" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{asset('assets/images/nu.jpeg')}}" width="582" height="327" alt="abstract image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">Ipsum dolor est</h2>
                  <p class="pb-4 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                  <a href="#" class="link-fancy link-fancy-light">Read more</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="p-5 pt-0 mt-5" data-aos="fade">
              <span class="h5 text-secondary fw-lighter">Company List</span>
              <h2 class="display-4">Check out these companies!</h2>
            </div>
            <div class="card bg-transparent" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{asset('assets/images/gojek.jpg')}}" width="582" height="327" alt="abstract image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">Ipsum dolor est</h2>
                  <p class="pb-4 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                  <a href="#" class="link-fancy link-fancy-light">Read more</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="card bg-transparent" data-aos="zoom-in-up">
              <div class="bg-dark shadow rounded-5 p-0">
                <img src="{{asset('assets/images/traveloka.png')}}" width="582" height="327" alt="abstract image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter">Ipsum dolor est</h2>
                  <p class="pb-4 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                  <a href="#" class="link-fancy link-fancy-light">Read more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div> -->

    </div>
    <div class="bg-dark position-relative">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">

          <div class="col-12 col-lg-7">
            <img class="img-fluid rounded-5 mb-n5 shadow" src="{{asset('assets/images/gojek.jpg')}}" width="512" height="512"
              alt="a nice person" loading="lazy" data-aos="zoom-in-right">
            <img class="img-fluid rounded-5 ms-5 mb-n5 shadow" src="img/webp/person11.webp" width="512" height="512"
              alt="another nice person" loading="lazy" data-aos="zoom-in-up">
          </div>
          <div class="col-12 col-lg-5 bg-dark rounded-5 py-5" data-aos="fade">
            <span class="h5 text-secondary fw-lighter">Do you like faces?</span>
            <h2 class="display-4">We constantly adding new images to our website. Does it make sense? No!</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-5 text-center text-lg-end" data-aos="zoom-in-right">
            <span class="h5 text-secondary fw-lighter">What we charge</span>
            <h2 class="display-4">You get all our knowledge for one simple price</h2>
          </div>
          <div class="col-12 col-lg-7 bg-dark rounded-5 py-vh-3 text-center my-5" data-aos="zoom-in-up">
            <h2 class="display-huge mb-5">
              <span class="fs-4 me-2 fw-light">$</span><span class="border-bottom border-5">499</span><span
                class="fs-6 fw-light">/day</span>
            </h2>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="btn btn-xl btn-light">Sign up
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

    </div>
    <div class="container-fluid px-vw-5 position-relative" data-aos="fade">
      <div class="position-absolute w-100 h-50 bg-black top-0 start-0"></div>
      <div class="position-relative py-vh-5 bg-cover bg-center rounded-5"
        style="background-image: url(img/webp/abstract12.webp)">
        <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">
          <div class="row d-flex align-items-center">

            <div class="col-6 d-flex align-items-center bg-dark shadow rounded-5 p-0" data-aos="zoom-in-up">
              <div class="row d-flex justify-content-center">
                <div class="col-12">
                  <img src="img/webp/person103.webp" width="684" height="457" alt="our CEO with some nice numbers"
                    class="img-fluid rounded-5" loading="lazy">
                </div>
                <div class="col-12 col-lg-10 col-xl-8 text-center my-5">
                  <p class="lead border-bottom pb-4 border-secondary">"Lorem ipsum dolor sit amet, consetetur sadipscing
                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                    voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                    takimata sanctus est Lorem ipsum dolor sit amet."</p>
                  <p class="text-secondary text-center">Jane Doe, CEO</p>
                </div>
              </div>
            </div>
            <div class="col-5 offset-1">
              <span class="h5 text-secondary fw-lighter">The numbers</span>
              <h2 class="display-huge fw-bolder" data-aos="zoom-in-left">+400</h2>
              <p class="h4 fw-lighter text-secondary">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
              </p>

              <h2 class="display-huge fw-bolder border-top border-secondary pt-5 mt-5" data-aos="zoom-in-left">78.981
              </h2>
              <p class="h4 fw-lighter text-secondary">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
              </p>
              <h2 class="display-huge fw-bolder border-top border-secondary pt-5 mt-5" data-aos="zoom-in-left">98%</h2>
              <p class="h4 fw-lighter text-secondary">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="bg-dark py-vh-5">
      <div class="container px-vw-5">
        <div class="row d-flex gx-5 align-items-center">
          <div class="col-12 col-lg-6">
            <div class="rounded-5 bg-black p-5 shadow" data-aos="zoom-in-right">
              <div class="fs-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


              </div>
              <p class="text-secondary lead">"Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et
                dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
              <div class="d-flex justify-content-start align-items-center border-top border-secondary pt-3">
                <img src="img/webp/person14.webp" width="96" height="96" class="rounded-circle me-3" alt="a nice person"
                  data-aos="fade" loading="lazy">
                <div>
                  <span class="h6 fw-5">Jane Doemunsky</span><br>
                  <small class="text-secondary">COO, The Boo Corp.</small>
                </div>
              </div>
            </div>
            <div class="rounded-5 bg-black p-5 shadow mt-5" data-aos="zoom-in-right">
              <div class="fs-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-half" viewBox="0 0 16 16">
                  <path
                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                </svg>

              </div>
              <p class="text-secondary lead">"Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat."</p>
              <div class="d-flex justify-content-start align-items-center border-top border-secondary pt-3">
                <img src="img/webp/person13.webp" width="96" height="96" class="rounded-circle me-3" alt="a nice person"
                  data-aos="fade" loading="lazy">
                <div>
                  <span class="h6 fw-5">Jane Doemunsky</span><br>
                  <small class="text-secondary">COO, The Boo Corp.</small>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6">
            <div class="p-5 pt-0" data-aos="fade">
              <span class="h5 text-secondary fw-lighter">What others have to say</span>
              <h2 class="display-4">Invidunt ut labore et dolore magna aliquyam erat.</h2>
            </div>
            <div class="rounded-5 bg-black p-5 shadow mt-5 gradient" data-aos="zoom-in-left">
              <div class="fs-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>


              </div>
              <p class="lead">"Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat."</p>
              <div class="d-flex justify-content-start align-items-center border-top pt-3">
                <img src="img/webp/person16.webp" width="96" height="96" class="rounded-circle me-3" alt="a nice person"
                  data-aos="fade" loading="lazy">
                <div>
                  <span class="h6 fw-5">Jane Doemunsky</span><br>
                  <small>COO, The Boo Corp.</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  @endif
  </main>

  <x-footer/>
</x-layout>
