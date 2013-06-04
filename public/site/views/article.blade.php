@include('site::_partials/header')

<h2>{{ $entry->title }}</h2>
<h4>Published at {{ $entry->published_at }} &bull; by {{ $entry->author->first_name }}</h4>
{{ $entry->body }}

@include('site::_partials/footer')
