@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit tag: <em>{{ $tag->tag }}</em>
		</div>

		<div class="panel-body">
			<form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">Tag</label>
					<input type="text" class="form-control" name="tag" value="{{ $tag->tag }}">
				</div>

				<div class="form-group">
					<p class="text-center">
						<button class="btn btn-success" type="submit">Update tag</button>
					</p>
				</div>
				
			</form>
		</div>
	</div>

@stop