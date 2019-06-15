@extends('layouts.app')

@section('title', 'Succes')

@section('content')
    @include('partials.header')

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

	<body>
		<header class="masthead">
		  <div class="container h-100">
		    <div class="row h-100 align-items-center justify-content-center text-center">
		        <p class="text-white-75 font-weight-light mb-5">
		        	Your post has been maded!
		        	<br>
		        	Click here to go back to the homepage:<br>
		        	<a href="/deviantart/public"><button type="button" class="btn btn-secondary">Homepage</button></a>
		        </div>
		        </p>
		    </div>
		  </div>
		</header>
	</body>
