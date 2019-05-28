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

    <nav class="{{-- navbar navbar-expand-lg navbar-light  --}}fixed-top py-3" id="mainNav">
    <div class="container white-top">
      <a class="navbar-brand js-scroll-trigger" href="/deviantart/public">DeviantArt</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
          <div class="top-right links white-bottom">
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
    </div>
 </nav>

{{-- //top-right links --}}
