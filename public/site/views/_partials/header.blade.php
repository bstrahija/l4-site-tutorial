<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel 4 Tutorial</title>
</head>
<body>
<div id="layout">
	<header>
		<h1><a href="{{ URL::route('home') }}">Laravel 4 Tutorial</a></h1>

		@include('site::_partials.navigation')
	</header>

	<hr>
