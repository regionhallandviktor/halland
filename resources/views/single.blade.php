@extends('layouts.app')

@section('content')
<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			@if (is_active_sidebar('sidebar-left'))		
			<div class="col col-12 md-col-3 px2">
				@include('partials.sidebar-left')
			</div>
			@endif

			<main class="col col-12 md-col-9 px2">
				<header>
					<h1>{!! get_the_title() !!}</h1>
				</header>
			
				@include('partials.content-single')
				<hr>
				@include('partials.updated-time')

				@if (is_active_sidebar('sidebar-article-bottom'))
				<div class="col col-12">
					@include('partials.sidebar-article-bottom')
				</div>
				@endif
			</main>

			<div class="col col-12 md-col-3 px2">
			
					
					@if (is_active_sidebar('sidebar-right'))		
						@include('partials.sidebar-right')
					@endif

		 			<nav id="content-nav" class="d-print-none"></nav>
		
			</div>
		</div>
	</div>
</div>

@php(comments_template('/partials/comments.blade.php'))

@endsection
