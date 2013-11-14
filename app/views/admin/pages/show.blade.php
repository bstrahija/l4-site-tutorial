@extends('admin._layouts.default')

@section('main')
	<h2>Display page</h2>

	<hr>

	<h3>{{ $page->title }}</h3>
	<h5>{{ $page->created_at }}</h5>
	{{ $page->body }}
@stop