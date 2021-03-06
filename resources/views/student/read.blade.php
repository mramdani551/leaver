@extends('../template/master-landing')
@section('title', 'Read your vbook')
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
                <h1 class="display-3  text-white">This is your memos</span></h1>
                <p class="lead  text-white">Go read some</p>
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
    <section class="section bg-secondary">
      <div class="container">
        <div class="list-group">
          <h2 class="text-center">List Memories</h2>
          @foreach ($notes as $note)
            <a href="{{ url('/student/read') }}/{{ $cs_id }}/{{ $note->id }}" class="list-group-item list-group-item-action">{{ $note->name }}</a>
          @endforeach
        </div>
      </div>
    </section>
  </main>
  @endsection