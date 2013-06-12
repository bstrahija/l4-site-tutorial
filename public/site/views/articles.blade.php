@include('site::_partials/header')

<h2>Articles</h2>

<hr>

<ul class="articles">
	@foreach ($entries as $entry)
		<li>
			<article>
				@if ($entry->image)
					<figure><a href="{{ route('article', $entry->slug) }}"><img src="{{ Image::thumb($entry->image, 150) }}" alt=""></a></figure>
				@endif

				<h3><a href="{{ route('article', $entry->slug) }}">{{ $entry->title }}</a></h3>
				<h5>Created at {{ $entry->created_at }} &bull; by {{ $entry->author->email }}</h5>
				<p>{{ Str::limit($entry->body, 100) }}</p>
				<p><a href="{{ route('article', $entry->slug) }}" class="more">Read more</a></p>
			</article>
		</li>
	@endforeach
</ul>

@include('site::_partials/footer')
