<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>L4 Site</title>

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">

	<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<script src="{{ URL::asset('assets/js/script.js') }}"></script>
</head>
<body>
<div class="container">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="{{ URL::route('admin.pages.index') }}">L4 Site</a>

				{{ $navigation }}
			</div>
		</div>
	</div>

	<hr>

	@yield('main')
</div>
</body>
</html>
