@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit blog settings
		</div>

		<div class="panel-body">
			<form action="{{ route('settings.update') }}" method="post">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">Site name</label>
					<input type="text" class="form-control" name="site_name" value="{{ $settings->site_name }}">
				</div>

				<div class="form-group">
					<label for="contact_number">Contact number</label>
					<input type="text" class="form-control" name="contact_number" value="{{ $settings->contact_number }}">
				</div>
				<div class="form-group">
					<label for="contact_email">Contact email</label>
					<input type="email" class="form-control" name="contact_email" value="{{ $settings->contact_email }}">
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" name="address" value="{{ $settings->address }}">
				</div>

				<div class="form-group">
					<p class="text-center">
						<button class="btn btn-success" type="submit">Update site settings</button>
					</p>
				</div>
				
			</form>
		</div>
	</div>

@stop