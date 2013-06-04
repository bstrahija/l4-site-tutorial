@include('site::_partials/header')

<h2>Articles</h2>

<ul>
	@foreach ($entries as $entry)
		<li>
			<h3>{{ $entry->title }}</h3>
			<h5>Published at {{ $entry->published_at }} &bull; by {{ $entry->author->first_name }}</h5>
			{{ $entry->body }}
		</li>
	@endforeach
</ul>

@include('site::_partials/footer')
