@include('site::_partials/header')

<h2>{{ $entry->title }}</h2>
{{ $entry->body }}

@include('site::_partials/footer')
