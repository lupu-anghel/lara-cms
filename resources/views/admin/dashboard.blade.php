@extends('layouts.app')

@section('content')
    
	<div class="col-lg-3">
		<div class="panel panel-info">
			<div class="panel-heading text-center">
				Published Posts
			</div>
			<div class="panel-body text-center">
				<h3>{{ $posts_count }}</h3>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="panel panel-danger">
			<div class="panel-heading text-center">
				Trashed Posts
			</div>
			<div class="panel-body text-center">
				<h3>{{ $trashed_count }}</h3>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="panel panel-success">
			<div class="panel-heading text-center">
				Users
			</div>
			<div class="panel-body text-center">
				<h3>{{ $users_count }}</h3>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="panel panel-info">
			<div class="panel-heading text-center">
				Categories
			</div>
			<div class="panel-body text-center">
				<h3>{{ $categories_count }}</h3>
			</div>
		</div>
	</div>

@endsection
