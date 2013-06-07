@include('site::_partials/header')

<article>
	<h2>{{ $entry->title }}</h2>
	{{ $entry->body }}
</article>

@include('site::_partials/footer')
