<x-layout>
  <x-navbar/>

  <main>
    <div class="bg-dark">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-7 text-lg-end" data-aos="fade-right">
            <span class="h5 text-secondary fw-lighter">Sponsors</span>
            <h2 class="display">Search Results</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black py-vh-3">
      <div class="container bg-black px-vw-3 py-vh-3 rounded-5 shadow">
        @if($sponsor->isEmpty())
            <p class="text-white">No sponsors found</p> <!-- Menampilkan pesan jika tidak ada hasil pencarian -->
        @else
        <div class="row gx-5">
          @foreach($sponsor as $s)
          <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="card bg-transparent" data-aos="zoom-in-up" style="height: 630px;">
              <div class="bg-dark shadow rounded-5 p-0 h-100 d-flex flex-column">
                <img src="{{ asset('storage/'.$s->image) }}" width="582" height="327" alt="Sponsor Image"
                  class="img-fluid rounded-5 no-bottom-radius" loading="lazy">
                <div class="flex-grow-1" style="padding: 2.4rem;">
                  <h2 class="fw-lighter multi-line-truncate" style="height: 85px; font-size:23px;">{{ $s->name }}</h2>
                  <p class="pb-4 text-secondary" style="height: 145px; font-size:16px; overflow: hidden;">{{ $s->description }}</p>
                  <p class="email-text">{{ $s->email }}</p>
                  <a href="{{ route('show.sponsor', $s->id) }}" class="link-fancy link-fancy-light" style="font-size:15px">Read more</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>

  </main>

  <x-footer/>
</x-layout>

