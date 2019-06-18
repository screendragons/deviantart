@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.header')
       {{--  @include('show') --}}
        <div class="container">
            <div class="row justify-content-center">

                <!-- Search form -->
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <br>
                <br>
                <br>

                {{-- Hier worden de posts laten zien die je hebt upgeloaded --}}
                @foreach($uploads as $upload)
                   {{--  <center> --}}
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ $upload['user']->name }}</div>
                                <div class="card-body">
                                    <div class="list-group-item {{-- col-xs-6 col-md-4 col-lg-10  --}}post">
                                        <img src="{{ $upload->image }}">
                                        {{-- <p id="title"><b>Title</b><br>{{$upload->name}}</p> --}}
                                        <p id="title"><b>Title</b>
                                            <br>
                                            <a href="{{ url('image/'.$upload['id'])}}">
                                                {{$upload->name}}
                                            </a>
                                        </p>
                                        <p id="description">
                                            <b>Description</b>
                                            <br>
                                            {{$upload->description}}
                                        </p>
                                        <p id="created_at">
                                            <b>Posted at</b>
                                            <br>
                                            {{$upload->created_at->toDayDateTimeString()}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </center> --}}
                    <br>
                @endforeach
            </div>
        </div>
@endsection

