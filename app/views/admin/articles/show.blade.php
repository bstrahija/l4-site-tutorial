@extends('admin._layouts.default')

@section('main')
	<h2>Display article</h2>

	<hr>

	<h3>{{ $article->title }}</h3>
	<h5>@{{ $article->created_at }}</h5>
	{{ $article->body }}
@stop