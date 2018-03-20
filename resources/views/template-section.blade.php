 {{--
	Template Name: Section
--}}

@extends('layouts.app')


@section('content')

	<div class="section-header px2">
		<div class="clearfix">
			<div class="container mx-auto">
				<div class="col col-12 px2">
				@if(isset($title))
					<h1 class="section-header__title">{!! $title !!}</h1>
				@endif

				@if(isset($section_nav))
					<nav class="section-nav">
						<ul class="section-nav__list">
							@foreach($section_nav as $page)
							<li class="section-nav__item">
								<a class="section-nav__link @if(isset($page->is_current)) active @endif" href="{{ $page->url }}">{{ $page->post_title }}</a>
							</li>
							@endforeach
						</ul>
					</nav>
				@endif
				</div>
			</div>
		</div>
	</div>
	
	<div class="clearfix">
		<div class="container mx-auto">
		@if (is_active_sidebar('sidebar-left'))
			<div class="col col-12 md-col-3 px2">
				@include('partials.sidebar-left')
			</div>
		@endif

		<div class="col col-12 md-col-6 px2">
			@while(have_posts()) @php(the_post())
				@include('partials.content')
			@endwhile

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

@endsection
