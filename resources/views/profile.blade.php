@extends('layouts.default')

@section('content')
    @include('partials.header')

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button> logout </button>
        </form>

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

    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
            </div>
            <form action="{{ route('upload') }}" method="post">
                 @csrf
                <button> Upload </button>
            </form>
        </div>
    </div>
@endsection

