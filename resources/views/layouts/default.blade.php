<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'DeviantArt')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

	<div class="container">
		@yield('content')
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
