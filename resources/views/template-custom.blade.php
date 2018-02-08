{{--
	Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
	
	{{-- Left Sidebar
	@if (is_active_sidebar('sidebar-left'))
		<div class="col col-12 md-col-3 px2">
			@include('partials.sidebar-left')
		</div>
	@endif 
	--}}
	
	<div class="col col-12 md-col-3 px2">
		@include('partials.sidebar-menu')
	</div>

	<div class="col col-12 md-col-6 px2">
		@while(have_posts()) @php(the_post())
			{{-- @include('partials.page-header') --}}
			@include('partials.content-page')
		@endwhile
	</div>

	@if (is_active_sidebar('sidebar-right'))
		<div class="col col-12 md-col-3 px2">
			@include('partials.sidebar-right')
		</div>
	@endif

@endsection
