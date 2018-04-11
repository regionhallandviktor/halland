@extends('layouts.app')

@section('content')


<div class="py3 background-gradient-blue">
	<div class="container px2 mx-auto">
		<div class="clearfix">
			<div class="col col-12 mt4 mb2">
				@if ( $post->post_parent )
				<a class="mr1" href="{{ get_permalink( $post->post_parent ) }}" >
					<svg class="icon-badge icon-badge--md">
				 		<use xlink:href="#arrow-right"/>
					</svg>
				</a>
				@endif
				<h1 class="h2 text-white mb0 inline-block align-middle">
					{!! get_the_title() !!}
				</h1>
			</div>
		</div>
	</div>
</div>

<div class="px2">
	<div class="container mx-auto mt3">
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

@if (have_comments() || comments_open())
@include('partials.comments')
@endif

@endsection