<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap+Sans:400" rel="stylesheet">

<nav class="fixed-top navbar-expand-lg" id="mainNav">

  <div class="container white-top">
    <a class="header navbar-brand" href="http://localhost/deviantart/public/">DeviantArt</a>

    @guest
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      <li class="nav-item">
        @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
      </li>
    </ul>
      @else
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link page" href="{{ url('/home') }}">
              Home
            </a>
          </li>
          <li class="nav-item">
          @if(Auth::user()->is_admin)
            <a class="nav-link page" href="{{ URL::to('/admin') }}">
              Admin panel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link page" href="{{ url('/profile') }}">
              Profile
            </a>
          </li>
          @endif
            {{-- <a class="nav-link page" href="{{ url('/profile') }}">Profile</a> --}}
          {{-- </li> --}}
        </ul>
        <form action="{{ route('logout') }}" method="post">
          <button class="logout btn btn-outline-info"> Log out </button>
         @csrf
        </form>
    @endguest
  </div>
</nav>
