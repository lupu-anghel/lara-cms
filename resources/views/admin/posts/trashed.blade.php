@extends('layouts.app')

@section('content')


<div class="panel panel-default">
	<div class="panel-heading">
		Trashed posts
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th> Image </th>
				<th> Title </th>
				<th> Edit </th>
				<th> Restore </th>
				<th> Delete permanently </th>
			</thead>

			<tbody>
				
				@if($posts->count() > 0)

				@foreach($posts as $post)

				<tr>
					<td> <img src="{{ $post->featured }}" alt="{{ $post->title }}" class="responsive" width="100" height="60" style="overflow:hidden;"> </td>
					<td> {{ $post->title }} </td>
					<td> <a href="" class="btn btn-info btn-xs">Edit</a> </td>
					<td> <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success btn-xs">Restore</a> </td>
					<td> <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger btn-xs">Delete</a> </td>
				</tr>

				@endforeach

				@else

					<tr>
						<th colspan="5" class="text-center">No trashed posts</th>
					</tr>

				@endif

			</tbody>
		</table>
	</div>
</div>
	

@stop