@extends('admin._layouts.default')

@section('main')

	<h2>Edit article</h2>

	@include('admin._partials.notifications')

	{{ Form::model($article, array('method' => 'put', 'route' => array('admin.articles.update', $article->id), 'files' => true)) }}

		<div class="control-group">
			{{ Form::label('title', 'Title') }}
			<div class="controls">
				{{ Form::text('title') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('body', 'Content') }}
			<div class="controls">
				{{ Form::textarea('body') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('image', 'Image') }}

			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
					@if ($article->image)
						<a href="<?php echo $article->image; ?>"><img src="<?php echo Image::resize($article->image, 200, 150); ?>" alt=""></a>
					@else
						<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
					@endif
				</div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>{{ Form::file('image') }}</span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>

		<div class="form-actions">
			{{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
			<a href="{{ URL::route('admin.articles.index') }}" class="btn btn-large">Cancel</a>
		</div>

	{{ Form::close() }}

@stop
