@extends('../template/master-landing')
@section('title', 'Welcome to Leaver')
@section('body')
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="display-3  text-white">Welcome back<span>{{ Auth::user()->name }}</span></h1>
                <p class="lead  text-white">Have some knowledge here</p>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 mt--200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Create new memories!</h6>
                    {{-- <p class="description mt-3">Fitur ini mengijinkan anda untuk membuat halaman demi halaman baru sesuai dengan nama mata pelajaran yang ada.</p> --}}
                    <a href="{{ url('/student/create') }}" class="btn btn-primary mt-4">Click here</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                      <i class="ni ni-istanbul"></i>
                    </div>
                    <h6 class="text-success text-uppercase">Read the book!</h6>
                    {{-- <p class="description mt-3">Fitur ini mengijinkan anda untuk membuka halaman demi halaman yang telah di buat sesuai dengan mata pelajaran yang ada.</p> --}}
                    <a href="#read" class="btn btn-success mt-4">Click here</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                      <i class="ni ni-planet"></i>
                    </div>
                    <h6 class="text-warning text-uppercase">Join class!</h6>
                    {{-- <p class="description mt-3">Fitur ini mengijinkan anda untuk melihat isi tas anda. Apakah itu buku virtual, catatan penting, dan lain-lain.</p> --}}
                    <a href="{{ url('/student/join') }}" class="btn btn-warning mt-4">Click here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-secondary" id="read">
      <div class="container">
        <div class="list-group">
          <h2 class="text-center">List Mapel</h2>
          @foreach ($courses as $course)
            <a href="{{ url('/student/read') }}/{{ $course->id }}" class="list-group-item list-group-item-action">{{$course->name}}</a>
          @endforeach
        </div>
      </div>
    </section>
  </main>
  @endsection