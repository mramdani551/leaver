@extends('../template/master-landing')
@section('title', 'Landing page')
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
                <h1 class="display-3  text-white">Welcome back<span>{{Auth::user()->username}}</span></h1>
                {{-- <p class="lead  text-white">Blablablablabla some quotes.</p> --}}
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
    <section class="section bg-secondary" id="myclass">
      <div class="container">
        <h1>OUTPUT BUKU DARI SISWA</h1>
          <div class="list-group">
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <input readonly class="form-control" type="text" placeholder="Book name" name="name" value="{{$notes[0]->name}}">
              </div>
            </div>
          <textarea name="content" class="ckeditor" id="ckedtor">{{$notes[0]->content}}</textarea>
        </div>
      </div>
    </section>
  </main>
  @endsection