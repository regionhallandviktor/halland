@if(isset($section_nav))
<nav class="section-nav mxn2">
	@foreach($section_nav as $page)
	<div class="section-nav__item col col-12 md-col-6 px2 mb3">
		<a class="card" href="{{ $page->url }}">
			<h3 class="card__title">
				<span>{{ $page->post_title }}</span>
				<svg class="icon--sm">
			 		<use xlink:href="#chevron-right"/>
				</svg>
			</h3>
			<p class="card__excerpt">
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