@extends('layouts.default')

@section('content')
    @include('partials.header')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <nav class="fixed-top" id="mainNav">
         <form action="{{ route('logout') }}" method="post">
             @csrf
             <button class="logout"> logout </button>
         </form>
    </nav>

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

            <br>
            <h5>My posts</h5>
            {{-- @foreach($posts as $post)
                <article></article>
            @endforeach --}}

            {{-- <img src="/admin/product/{{ $product['image'] }}" height="30px" width="30px" /> --}}
        </div>
    </div>
@endsection

