@include('site::_partials/header')

<article>
	<h3>{{ $entry->title }}</h3>
	<h5>Published at {{ $entry->created_at }} &bull; by {{ $entry->author->email }}</h5>
	{{ $entry->body }}

	<hr>

	<a href="{{ route('article.list') }}">&laquo; Back to articles</a>
</article>

@include('site::_partials/footer')
