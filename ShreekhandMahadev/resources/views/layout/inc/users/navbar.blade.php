{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    @if(Auth::check())
      @if(Route::has('login-view'))
        <a class="navbar-brand" href="{{ route('show-activities') }}">Home</a>
      @endif
    @else
      <a class="navbar-brand" href="#">Navbar</a>

    @endif
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
              <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="{{ route('login') }}" class="btn btn-outline-success m-2 my-sm-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-success m-2 my-sm-2">Register</a>
      </form>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-lg">
  <div class="container">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <a href="index.html" class="navbar-brand mx-auto mx-lg-0">
          <i class="bi-bullseye brand-logo"></i>
          <span class="brand-text">Shreekhand MaHadev <br> Yatra</span>
      </a>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link click-scroll" href="#section_1">Home</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link click-scroll" href="#section_2">About</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link click-scroll" href="#section_3">Contact Us</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link click-scroll" href="#section_7">Login</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link click-scroll" href="{{ route('register') }}">Register</a>
              </li>
          </ul>
      <div>
              
  </div>
</nav>
