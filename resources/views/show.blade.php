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
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{$upload->image}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"> {{$upload->name}}</h5>
		    <p class="card-text">{{$upload->description}}</p>
		    <p class="card-text">{{$upload->created_at->toDayDateTimeString()}}</p>
		    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
		  </div>
		</div>

@endsection


