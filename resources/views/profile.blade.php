@extends('layouts.app')

@section('title', 'Profile')

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
            @foreach($uploads as $upload)
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{$upload->image}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"> {{$upload->name}}</h5>
                    <p class="card-text">{{$upload->description}}</p>
                    <p class="card-text">{{$upload->created_at->toDayDateTimeString()}}</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  </div>
                  <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$upload['id']}}').submit();">Verwijderen</a>

              <form id="remove-form-{{$upload['id']}}" action="{{url('image/'.$upload->id)}}" method="POST" style="display: none;">

                      @csrf

                      @method('DELETE')

                  </form>
                </div>
            @endforeach

            {{-- <img src="/admin/product/{{ $product['image'] }}" height="30px" width="30px" /> --}}
        </div>
    </div>
@endsection
