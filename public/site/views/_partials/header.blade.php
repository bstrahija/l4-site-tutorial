<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel 4 Tutorial</title>
	<link rel="stylesheet" href="{{ asset('site/assets/css/main.css') }}">
</head>
<body>
<div id="layout">
	<header id="header">
		@include('site::_partials.navigation')

		<h1><a href="{{ route('home') }}">Laravel 4 Tutorial</a></h1>
	</header>


