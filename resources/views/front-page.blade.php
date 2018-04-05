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

			<main class="col col-12 md-col-6 px2">
				<header>
					<h1>{!! get_the_title() !!}</h1>
				</header>
			
				@include('partials.content-page')

				@if (is_active_sidebar('sidebar-article-bottom'))
				<div class="col col-12">
					@include('partials.sidebar-article-bottom')
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
@endsection
