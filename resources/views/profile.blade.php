@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('partials.header')

    <div class="row justify-content-center">
        <div class="col-md-8 profile-section">

            <div class="card">
                <div class="card-header">
                    Hello {{ Auth::user()->name }}, welcome back!
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <br>
                    <br>
                    {{-- Deze knop gaat naar de pagina waar je afbeeldingen kan uploaden --}}
                    <p>Upload here your creation:</p>
                    <a href="{{ route('image.create') }}" class="btn btn-outline-info logout upload">
                        Upload
                    </a>
                </div>
            </div>
            <br>
            <br>

            {{-- Hier komen je posts te staan die je hebt gemaakt --}}
            <h3>My posts</h3>
            @foreach($uploads as $upload)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$upload->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{$upload->name}}</h5>
                        <p class="card-text">{{$upload->description}}</p>
                        <p class="card-text">{{$upload->created_at->toDayDateTimeString()}}</p>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                    <div class="buttons">
                        <div>
                            {{-- edit knop --}}
                            <a href="{{url('/image/'.$upload->id.'/edit') }}"class="btn btn-primary">Edit</a>
                              @csrf
                              @method('PUT')

                            {{-- verwijder knop --}}
                            <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$upload['id']}}').submit();">Delete</a>

                            <form id="remove-form-{{$upload['id']}}" action="{{url('image/'.$upload->id)}}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
@endsection
