@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Create a new user
		</div>

		<div class="panel-body">
			<form action="{{ route('user.store') }}" method="post">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">User</label>
					<input type="text" class="form-control" name="name">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email">
				</div>

				<div class="form-group">
					<p class="text-center">
						<button class="btn btn-success" type="submit">Add user</button>
					</p>
				</div>
				
			</form>
		</div>
	</div>

@stop