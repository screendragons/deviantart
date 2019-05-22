@extends('layouts.default')

@section('content')
    @include('partials.header')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button> logout </button>
        </form> --}}

       {{--  @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    @if
                        <a href="{{ url('/profile') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        @endif --}}
{{--
    </nav> --}}


    <nav class="fixed-top" id="mainNav">
  {{--    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav"> --}}
         <form action="{{ route('logout') }}" method="post">
             @csrf
             <button> logout </button>
         </form>
    </nav>
  {{--   <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-8 profile-section">
            Hello {{ Auth::user()->name }}
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <form action="{{ route('upload') }}" method="post">
                 @csrf
                <button> Upload </button>
            </form>
        </div>
    </div>
    {{-- </div> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card" id="auth-post">

                    <div class="card-header">{{ Auth::user()->name }}</div>

                    <div class="card-body">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in! --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

