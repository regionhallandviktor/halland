@extends('layouts.app')

@section('content')
<div class="py3 background-gradient-blue">
	<div class="container px2 mx-auto">
		<div class="clearfix">
			<div class="col col-12 mt4 mb2">
				<h1 class="h2 text-white mb0 inline-block align-middle">
					{!! get_the_title() !!}
				</h1>
			</div>
		</div>
	</div>
</div>

<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			@if (is_active_sidebar('sidebar-left'))		
			<div class="col col-12 md-col-3 px2">
				@include('partials.sidebar-left')
			</div>
			@endif

			<main class="col col-12 px2">			
				<article class="article">
					<div class="clearfix flex justify-between items-baseline">
						<h2 class="flex-auto p0 m0">Nyheter</h2>
						<div class="mr1 flex-auto right-align">
						
						<a href="{{ get_bloginfo_rss() }}" >
							<svg class="icon-badge icon-badge--md">
						 		<use xlink:href="#rss"/>
							</svg> Prenumerera på RSS
						</a>

						</div>
						
						
					</div>

					<p>Nyheter och aktuellt för dig som är vårdgivare i Halland</p>
					@include('partials.component-list-posts')
				</article>
					@if (is_active_sidebar('sidebar-article-bottom'))
					
						@include('partials.sidebar-article-bottom')
					
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
