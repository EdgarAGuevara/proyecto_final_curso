<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<body>
	
	<header class="container">
		@section('header')
			<h1>@yield('header_title')</h1>
		@show
	</header>
	<div id="main" class="container">
		@yield('content')
	</div>
	<footer class="container">
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2014 Wembler, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Términos y condiciones</a></p>
	</footer>
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>