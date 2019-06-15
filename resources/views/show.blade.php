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

@endsection


