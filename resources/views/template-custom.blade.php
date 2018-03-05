{{--
	Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
	
	{{-- Left Sidebar
	@if (is_active_sidebar('sidebar-left'))
		<aside class="col col-12 md-col-3 px2">
			@include('partials.sidebar-left')
		</aside>
	@endif 
	--}}
	
	<aside class="col col-12 md-col-3 px2">
		@include('partials.sidebar-menu')
	</aside>

	<div class="col col-12 md-col-6 px2">
		@while(have_posts()) @php(the_post())
			@include('partials.content-page')
		@endwhile
	</div>

	@if (is_active_sidebar('sidebar-right'))
		<aside class="col col-12 md-col-3 px2">
			@include('partials.sidebar-right')
		</aside>
	@endif

@endsection
