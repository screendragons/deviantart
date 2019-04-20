<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Mijn blog')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

	<div class="container">

		@yield('content')

	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
