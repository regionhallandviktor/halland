@if(isset($nav_section))
<nav class="section-nav mxn2">
	@foreach($nav_section as $page)
	<div class="section-nav__item col col-12 sm-col-6 px2 mb3">
		<a class="featured-link" href="{{ $page->url }}">
			<h3 class="featured-link__title">
				<span>{{ $page->post_title }}</span>
				<svg class="icon--sm">
			 		<use xlink:href="#chevron-right"/>
				</svg>
			</h3>
			<p class="featured-link__excerpt">
			@if(has_excerpt($page->ID)) 
				{{ $page->post_excerpt }}
			@else
				{{ \App\trim_excerpt($page->post_content) }}
			@endif
			</p>
		</a>
	</div>
	@endforeach
</nav>
@endif