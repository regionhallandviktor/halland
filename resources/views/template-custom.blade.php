{{--
	Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
	@if (is_active_sidebar('sidebar-right'))
		@include('partials.sidebar-right')
	@endif

	@while(have_posts()) @php(the_post())
		@include('partials.page-header')
		@include('partials.content-page')
	@endwhile

	@if (is_active_sidebar('sidebar-left'))
		@include('partials.sidebar-left')
	@endif
@endsection
