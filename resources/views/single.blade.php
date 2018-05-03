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
					@include('partials.content-single')
					<hr>
					@include('partials.entry-meta')

					@if (is_active_sidebar('sidebar-article-bottom'))
					<div class="col col-12">
						@include('partials.sidebar-article-bottom')
					</div>
					@endif
				</main>

				<div class="col col-12 md-col-3 px2">
						
						@if($categories)

							@include('partials.sidebar-categories', [
								'title' => 'Kategorier',
								'data' => $categories
							])

						@endif

						@if($tags)

							@include('partials.sidebar-tags', [
								'title' => 'Taggar',
								'data' => $tags
							])

						@endif

						
						@if (is_active_sidebar('sidebar-right'))		
							@include('partials.sidebar-right')
						@endif
						<aside class="article">
			 				<nav id="content-nav" class="d-print-none d-none d-md-block"></nav>
						</aside>
				</div>
			</div>
		</div>
	</div>

	@include('partials.comments')

@endsection