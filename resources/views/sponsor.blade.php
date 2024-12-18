<x-layout>
  <x-navbar/>
  <main>
    <div class="container">
      <div class="row d-flex justify-content-center py-vh-5 pb-0">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="row">
            <div class="col-12">
              <h4 class="display-1 fw-bold mb-5"><br>{{$sponsor->name}}<br></h4>
              <div class="row d-flex justify-content-center align-items-center min-vh-100">

                <div class="col-12 col-lg-7 text-center">
                  <img class="img-fluid rounded-5 mb-n5 shadow" src="{{asset('storage/'. $sponsor->image)}}" width="512" height="512"
                    alt="Sponsor Image" loading="lazy" data-aos="zoom-in-right">
                    <br><br><br>
                </div>

                <div class="col-12 col-lg-10 col-xl-5 text-center">
                  <div class="p-5 small text-muted">
                    <p>{{ $sponsor->email }}</p>
                  </div>
                </div>
              <br>

              <p class="lead border-top pt-5 mt-5" data-aos="fade-up">{{$sponsor->description}}</p>
              <br>
            </div>
          </div>
        </div>
        <a href="https://docs.google.com/document/d/1NOoNTRrxP2zrRCMUf28cSKkpchaXIylc/export?format=docx"
          aria-label="Download this template"
          class="btn btn-outline-light"
          download>
          <small>Download Proposal</small>
        </a>
        <!-- {{-- <a href="{{ url('/submission') }}" aria-label="Download this template" --}} -->
        <a href="{{ route('submission.show', $sponsor->id)}}" aria-label="Download this template"
          class="btn btn-outline-light">
          <small>Submit Proposal</small>
        </a>
        <div class="row">
          <div class="col-12 py-vh-2">

          </div>
        </div>
      </div>
    </div>

  </main>

  <x-footer/>
</x-layout>
