 {{--
	Template Name: Single Post
	Controller: Single
--}}

@extends('layouts.app')

@section('content')

<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			@if (is_active_sidebar('sidebar-left'))		
			<div class="col col-12 md-col-3 px2">
				@include('partials.sidebar.left')
			</div>
			@endif

			<main class="col col-12 md-col-9 px2">
				<header>
					<h1>{!! get_the_title() !!}</h1>
				</header>
			
				@while(have_posts()) @php(the_post())
					@include('partials.components.article')
				@endwhile

				@if (is_active_sidebar('sidebar-article-bottom'))
				<div class="col col-12">
					@include('partials.sidebar.article.bottom')
				</div>
				@endif
			</main>

			<div class="col col-12 md-col-3 px2">
				<div class="col col-12 sm-col-3 px2 d-print-none">
		 			<nav id="content-nav"></nav>
				</div>
			</div>
		</div>
	</div>
</div>

@php(comments_template('/partials/components/comments.blade.php'))


@endsection
