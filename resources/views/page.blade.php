@extends('layouts.app')

@section('content')
<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 md-col-3 px2">
				@include('partials.nav-sidebar')
				@if (is_active_sidebar('sidebar-left'))
				@include('partials.sidebar-left')
				@endif
			</div>

			<main class="col col-12 md-col-6 px2">
				<header>
					<h1>{!! get_the_title() !!}</h1>
				</header>
				
				@include('partials.content-page')

				@if (is_active_sidebar('sidebar-bottom'))
				<div class="col col-12">
					@include('partials.sidebar-bottom')
				</div>
				@endif
			</main>

			@if (is_active_sidebar('sidebar-right'))
			<div class="col col-12 md-col-3 px2">
				@include('partials.sidebar-right')
			</div>
			@endif
		</div>
	</div>
</div>

@php(comments_template('/partials/comments.blade.php'))

@endsection