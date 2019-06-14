@extends('layouts.app')

@section('content')
    @include('partials.header')
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
                <div class="col-md-8">
                    {{-- @foreach($posts as $post) --}}
                        <div class="card">
                            <div class="card-header">User</div>

                            <div class="card-body">
                                {{-- @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif --}}

                                @foreach($uploads as $upload)

                                    <div class="list-group-item {{-- col-xs-6 col-md-4 col-lg-10  --}}post">
                                        <img src="{{ $upload->image }}">
                                        <p id="title"><b>Title</b><br>{{$upload->name}}</p>
                                        <p id="description"><b>Description</b><br>{{$upload->description}}</p>
                                        <p id="created_at"><b>Posted at</b><br>{{$upload->created_at}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                   {{--  @endforeach --}}
                </div>
            </div>
        </div>

@endsection

