@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.header')

       {{--  @include('show') --}}

        {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet" > --}}
       {{--  <nav class="fixed-top" id="mainNav">
             <form action="{{ route('logout') }}" method="post">
                 @csrf
                 <button class="logout btn btn-outline-info"> Log out </button> --}}
                {{--  <button type="button" class="btn btn-outline-secondary logout">Log out</button> --}}
           {{--   </form> --}}
      {{--   </nav> --}}
        <div class="container">
            <div class="row justify-content-center">
                <!-- Search form -->
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <br>
                <br>
                <br>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">User</div>

                        <div class="card-body">

                            @foreach($uploads as $upload)

                                <div class="list-group-item {{-- col-xs-6 col-md-4 col-lg-10  --}}post">
                                    <img src="{{ $upload->image }}">
                                    {{-- <p id="title"><b>Title</b><br>{{$upload->name}}</p> --}}
                                    <p id="title"><b>Title</b>
                                        <br>
                                        <a href="{{ route('image.show')}}{{-- {{$upload->id}} --}}">
                                            {{$upload->name}}
                                        </p>
                                        </a>
                                    <p id="description"><b>Description</b>
                                        <br>{{$upload->description}}</p>
                                    <p id="created_at"><b>Posted at</b>
                                        <br>{{$upload->created_at->toDayDateTimeString()}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

