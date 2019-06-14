@extends('layouts.default')

@section('content')
    @include('partials.header')


    <div class="row justify-content-center">
        <div class="col-md-8 profile-section">

            <div class="card">
                <div class="card-header">Hello {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

                <a href="{{ route('image.create') }}" class="logout btn btn-outline-info"> Upload </a>

            <br>
            <h5>My posts</h5>
           {{--  @foreach($posts as $post)
                {{ $post-> name}}
            @endforeach --}}

            {{-- <img src="/admin/product/{{ $product['image'] }}" height="30px" width="30px" /> --}}
        </div>
    </div>
@endsection
