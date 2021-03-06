<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  
  <title>@yield('title')</title>

  <!-- Favicon -->
  <link href="{{ asset('assets-nonadmin/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('assets-nonadmin/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-nonadmin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('assets-nonadmin/css/argon.css?v=1.1.0') }}" rel="stylesheet">
  <script src="{{ asset('assets-ckeditor/ckeditor.js') }}"></script>
  <style>
    html {
        scroll-behavior: smooth;
    }
  </style>
</head>
<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
          <img src="{{ asset('assets/img/brand/white.png') }}" alt="brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="{{ asset('assets/img/brand/white-black.png') }}" alt="brand">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Useful Menu</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  @if (Auth::user()->role=='teacher')
                  <a href="{{ url('/teacher/#myclass') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">My Class</h6>
                      {{-- <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p> --}}
                    </div>
                  </a>
                  <a href="{{ url('/teacher/create') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-palette"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Create New Class</h6>
                      {{-- <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for Argon.</p> --}}
                    </div>
                  </a>
                  <a href="{{ url('/teacher/library') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-ui-04"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h5 class="heading text-warning mb-md-1">Library</h5>
                      {{-- <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p> --}}
                    </div>
                  </a>
                  @endif
                  @if (Auth::user()->role == 'student')
                  <a href="{{ url('/student/create') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Create new memories</h6>
                      {{-- <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p> --}}
                    </div>
                  </a>
                  <a href="{{ url('/student/#read') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-palette"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Read my book</h6>
                      {{-- <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for Argon.</p> --}}
                    </div>
                  </a>
                  <a href="{{ url('/student/join') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-planet"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h5 class="heading text-warning mb-md-1">Join Class</h5>
                      {{-- <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p> --}}
                    </div>
                  </a>
                  <a href="{{ url('/student/library') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-ui-04"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h5 class="heading text-warning mb-md-1">Library</h5>
                      {{-- <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p> --}}
                    </div>
                  </a>
                  @endif
                </div>
              </div>
            </li>
            {{-- <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Examples</span>
              </a>
              <div class="dropdown-menu">
                <a href="../examples/landing.html" class="dropdown-item">Landing</a>
                <a href="../examples/profile.html" class="dropdown-item">Profile</a>
                <a href="../examples/login.html" class="dropdown-item">Login</a>
                <a href="../examples/register.html" class="dropdown-item">Register</a>
              </div>
            </li> --}}
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li>
              <a class="nav-link nav-link-icon">
                <span class="nav-link-inner--text">{{ Auth::user()->username }}</span>
              </a>
            </li>
            <li>
              <a class="nav-link nav-link-icon" href="{{ url('/logout') }}">
                <span class="nav-link-inner--text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  @yield('body')

  <footer class="footer has-cards">
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        {{-- <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="https://github.com/creativetimofficial" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div> --}}
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2020 <a href="{{ route('home') }}">Leaver Tim</a>.
          </div>
        </div>
        {{-- <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div> --}}
      </div>
    </div>
</footer>
</body>

<!-- Core -->
<script src="{{ asset('assets-nonadmin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets-nonadmin/vendor/popper/popper.min.js') }}"></script>
  <script src="{{ asset('assets-nonadmin/vendor/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets-nonadmin/vendor/headroom/headroom.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets-nonadmin/js/argon.js?v=1.1.0') }}"></script>
  <script>
    $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
  </script>
</html>