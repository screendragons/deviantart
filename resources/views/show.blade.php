@extends('layouts.app')

@section('title', 'Post')

@section('content')
    @include('partials.header')

    @section ('content')
	  {{-- 	<div>
		    {{$upload->name}}
		    <img src="{{$upload->image}}">
		    {{$upload->description}}
		    {{$upload->created_at->toDayDateTimeString()}}
		</div> --}}
		{{-- test --}}
		{{-- <div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{$upload->image}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"> {{$upload->name}}</h5>
		    <p class="card-text">{{$upload->description}}</p>
		    <p class="card-text">{{$upload->created_at->toDayDateTimeString()}}</p> --}}
		    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
		  {{-- </div>
		</div> --}}

		<center>
		<div class="col-md-6">
		    <div class="card">
		        <div class="card-header">{{ $upload['user']->name }}</div>
		            <div class="card-body">
		                <div class="list-group-item {{-- col-xs-6 col-md-4 col-lg-10  --}}post">
		                    <img src="{{ $upload->image }}">
		                    {{-- <p id="title"><b>Title</b><br>{{$upload->name}}</p> --}}
		                    <p id="title"><b>Title</b>
		                        <br>
		                       {{--  <a href="{{ url('image/'.$upload['id'])}}"> --}}
		                            {{$upload->name}}
		                        {{-- </a> --}}
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
	</center>

@endsection


