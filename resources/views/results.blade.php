@extends('layouts.frontend')

@section('content')

	<div class="stunning-header stunning-header-bg-lightviolet">
	    <div class="stunning-header-content">
	        <h1 class="stunning-header-title">Search results for: {{ $query }}</h1>
	    </div>
	</div>

	<div class="container">
	    <div class="row medium-padding120">
	        
			<main class="main">
            
	            <div class="row">
	            	@if($posts->count() > 0)
		                <div class="case-item-wrap">
		                	@foreach($posts as $post)

			                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			                        <div class="case-item">
			                            <div class="case-item__thumb">
			                                <img src="{{ $post->featured }}" alt="{{ $post->title }}">
			                            </div>
			                            <h6 class="case-item__title"><a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h6>
			                        </div>
			                    </div>

			                @endforeach
		                </div>
		            @else
						<h3 class="text-center">No results found. Go to <a href="{{ route('index') }}" style="color: blue;">homepage &rarr;</a></h3>
		            @endif
	            </div>


        	</main>
	    </div>
	</div>

@endsection