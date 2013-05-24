<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>L4 Site</title>

	@include('admin._partials.assets')
</head>
<body>
<div class="container">
	@include('admin._partials.header')

	@yield('main')
</div>
</body>
</html>
