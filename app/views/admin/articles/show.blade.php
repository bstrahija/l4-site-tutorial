@extends('admin._layouts.default')

@section('main')
	<h2>Display article</h2>

	<hr>

	<h3>{{ $article->title }}</h3>
	<h5>@{{ $article->created_at }}</h5>
	{{ $article->body }}

	@if ($article->image)
		<hr>
		<figure><img src="{{ Image::resize($article->image, 800, 600) }}" alt=""></figure>
	@endif
@stop
