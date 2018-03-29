 {{--
	Template Name: Section
--}}

@extends('layouts.app')


@section('content')
<div class="py4">
	<div class="container mx-auto">
		<div class="clearfix">

			@if (is_active_sidebar('sidebar-left'))
			<div class="col col-12 md-col-3 px2">
				@include('partials.sidebar-left')
			</div>
			@endif

			<div class="col col-12 md-col-8 px2">
				<div class="col col-12 mb4">
					<header>
						<h1 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h1>
					</header>

					@while(have_posts()) @php(the_post())
						@include('partials.article')
					@endwhile
				</div>

				<div class="col col-12 mb3">
					@include('partials.nav-section')
				</div>

				@if (is_active_sidebar('sidebar-bottom'))
					<div class="col col-12">
						@include('partials.sidebar-bottom')
					</div>
				@endif
			</div>

			@if (is_active_sidebar('sidebar-right'))
			<div class="col col-12 md-col-3">
					@include('partials.sidebar-right')
			</div>
			@endif
			
		</div>
	</div>
</div>

@endsection
