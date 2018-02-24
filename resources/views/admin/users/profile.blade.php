@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit your profile
		</div>

		<div class="panel-body">
			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">User name</label>
					<input type="text" class="form-control" value="{{ $user->name }}" name="name">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" value="{{ $user->email }}" name="email">
				</div>

				<div class="form-group">
					<label for="password">New password</label>
					<input type="password" class="form-control" name="password">
				</div>

				<div class="form-group">
					<label for="avatar">Upload avatar</label>
					<input type="file" class="form-control" name="avatar">
				</div>

				<div class="form-group">
					<label for="facebook">Facebook profile</label>
					<input type="text" class="form-control" value="{{ $user->profile->facebook }}" name="facebook">
				</div>

				<div class="form-group">
					<label for="facebook">Youtube channel</label>
					<input type="text" class="form-control" value="{{ $user->profile->youtube }}" name="youtube">
				</div>

				<div class="form-group">
					<label for="about">About you</label>
					<textarea class="form-control" name="about" id="about" cols="6" rows="6">{{ $user->profile->about }}</textarea>
				</div>

				<div class="form-group">
					<p class="text-center">
						<button class="btn btn-success" type="submit">Update profile</button>
					</p>
				</div>
				
			</form>
		</div>
	</div>

@stop