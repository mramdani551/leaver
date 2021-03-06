@extends('template/master-home')
@section('title','Login')
@section('body')
<main>
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-md">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            {{-- <div class="card-header bg-white pb-5">
              <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon">
                    <img alt="image" src="./assets/img/icons/common/fb.png">
                  </span>
                  <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon">
                    <img alt="image" src="./assets/img/icons/common/google.svg">
                  </span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div> --}}
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <big>Sign in with your credentials</big>
                <br><hr>
                @if (session()->get('msg'))
                  <div class="alert alert-danger" role="alert">
                    {{ session()->get('msg') }}
                  </div>
                @endif
              </div>
              <form action="{{ url('/login/process') }}" method="POST">
              {{ csrf_field() }}
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                    </div>
                      <input class="form-control" placeholder="Username" type="text" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for="customCheckLogin">
                    <span>Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary my-4" value="Sign in" name="submit">
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="{{ url('/password/reset') }}" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="{{ url('register') }}" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection