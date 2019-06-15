{{-- <div class="flex-center position-ref full-height">
  @if (Route::has('login'))
      <div class="top-right links">
          @auth
              <a href="{{ url('/profile') }}">Profile</a>
          @else
              <a href="{{ route('login') }}">Login</a>
                /
              @if (Route::has('register'))
                  <a href="{{ route('register') }}">Register</a>
              @endif
          @endauth

      </div>
  @endif
</div>
 --}}

{{-- <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
       <div class="container">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="{{ route('bedrijven') }}">Bedrijven</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="{{ route('contact') }}">Contact</a>
         </li>
       </ul>
     </div>
       @auth
           <form action="{{ route('auth.logout') }}" method="POST">
                   @csrf
                   <p>
                       <button type="submit" class="btn btn-link">Uitloggen</button>
                       @if(Auth::user()->admin)
                       / <a href="{{ route('admin.index') }}">Admin panel</a>
                       @else <a href="{{ route('profile') }}">profiel panel</a>
                   @endif
               </p>
           </form>
       @endauth
       @guest
           <p><a href="{{ route('login') }}">Inloggen</a> / <a href="{{ route('register') }}">Registreren</a></p>
       @endguest
   </div>
   </nav>

   </header>
 --}}


    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav"> --}}
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap+Sans:400" rel="stylesheet">

    <nav class="{{-- navbar navbar-expand-lg navbar-light  --}}fixed-top {{-- py-3 --}} navbar-expand-lg {{-- navbar-light bg-light --}}" id="mainNav">
      <div class="container white-top">

        <a class="header navbar-brand {{-- js-scroll-trigger --}}" href="http://localhost/deviantart/public/">DeviantArt</a>
        {{-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}

        {{-- <div class="flex-center position-ref full-height"> --}}
          @if (Route::has('login'))
            {{-- <div class="top-right links white-bottom"> --}}
              @auth
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link page" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link page" href="{{ url('/profile') }}">Profile</a>
                </li>
              </ul>
              <form action="{{ route('logout') }}" method="post">

                <button class="logout btn btn-outline-info"> Log out </button>
               {{--  <button type="button" class="btn btn-outline-secondary logout">Log out</button> --}}
               @csrf
                </form>

        {{-- <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
            <div class="top-right links white-bottom">
              @auth
              <div class="navbar-nav"> --}}
             {{--    <li class="nav-item"> --}}
                {{--   <a class="nav-item nav-link" href="{{ url('/home') }}">Home</a> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item"> --}}
                {{--   <a class="nav-item nav-link" href="{{ url('/profile') }}">Profile</a> --}}
                {{-- </li> --}}
             {{--  </div>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="logout btn btn-outline-info"> Log out </button> --}}
                   {{--  <button type="button" class="btn btn-outline-secondary logout">Log out</button> --}}
               {{--  </form>
                @else
                  <a href="{{ route('login') }}">Login</a>
                    /
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth --}}

           {{--  </div> --}}
          @endif
       {{--  </div> --}}
            </div>
         {{--  @endif --}}
        </div>
      </div>
    </nav>




{{-- //top-right links --}}
