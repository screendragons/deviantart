<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap+Sans:400" rel="stylesheet">

<nav class="fixed-top navbar-expand-lg" id="mainNav">
  <div class="container white-top">
    <a class="header navbar-brand" href="http://localhost/deviantart/public/">DeviantArt</a>

   {{--  @auth
      <form action="{{ route('auth.logout') }}" method="POST">
        @csrf
          <p>
           <button class="logout btn btn-outline-info"> Log out </button>
              @if(Auth::user()->admin)
                  / <a href="{{ route('admin.index') }}">Admin panel</a>
                @else <a href="{{ route('profile') }}">Profile panel</a>
              @endif
          </p>
      </form>
    @endauth --}}

    @guest
      {{-- <li class="nav-item"> --}}
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
     {{--  </li> --}}
      @if (Route::has('register'))
          {{-- <li class="nav-item"> --}}
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         {{--  </li> --}}
      @endif
      @else

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link page" href="{{ url('/home') }}">Home</a>
          </li>
          <li class="nav-item">
            @if(Auth::user()->is_admin)
              <a href="{{ URL::to('/admin') }}">Admin panel</a>
              /
            @endif
            <a href="{{ url('/profile') }}">Profile</a>

            {{-- <a class="nav-link page" href="{{ url('/profile') }}">Profile</a> --}}
          </li>
        </ul>
        <form action="{{ route('logout') }}" method="post">
          <button class="logout btn btn-outline-info"> Log out </button>
         @csrf
        </form>

    @endguest
  </div>
</nav>
