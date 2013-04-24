@extends('admin._layouts.default')

@section('main')

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>When</th>
				<th><i class="icon-cog"></i></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td><a href="{{ URL::route('admin.articles.show', $article->id) }}">{{ $article->title }}</a></td>
					<td>{{ $article->created_at }}</td>
					<td>
						<a href="{{ URL::route('admin.articles.edit', $article->id) }}" class="btn btn-success btn-mini">Edit</a>
						<a href="{{ URL::route('admin.articles.destroy', $article->id) }}" class="btn btn-danger btn-mini">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop