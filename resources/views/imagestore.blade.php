@extends('layouts.default')

@section('title', 'Succes')

@section('content')

    @include('partials.header')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<div>
		Yesss!! New post has been maded
	</div>


@endsection
