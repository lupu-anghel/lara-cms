@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Create a new category
		</div>

		<div class="panel-body">
			<form action="{{ route('category.store') }}" method="post">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">Category name</label>
					<input type="text" class="form-control" name="name">
				</div>

				<div class="form-group">
					<p class="text-center">
						<button class="btn btn-success" type="submit">Create category</button>
					</p>
				</div>
				
			</form>
		</div>
	</div>

@stop