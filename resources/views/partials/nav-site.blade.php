@if(isset($nav_site))
<nav class="site-nav">
	<div class="site-nav__container">
		<a href="{{ esc_url( home_url( '/' ) ) }}" class="site-nav__logo">
			<img src="@asset('images/navigation_logo.svg')">
		</a>
		<ul class="site-nav__list">
			@foreach($nav_site as $topLevelPage)
			<li class="site-nav__item">
				<a href="{{ get_page_link($topLevelPage->ID) }}" class="site-nav__link">{{ $topLevelPage->post_title }}</a>
			
				@if(isset($topLevelPage->children))
				<nav class="dropdown">
					<div class="site-nav__container">
						<ul class="dropdown__list">
							@foreach($topLevelPage->children as $childPage)
							<li class="dropdown__item col col-12 md-col-4">
								<a href="{{ get_page_link($childPage->ID) }}" class="dropdown__link">{{ $childPage->post_title }}</a>
								<span class="dropdown__link-description">Information om ambulanssjukvården</span>
							</li>
							@endforeach
						</ul>
						<div class="col col-12">
						<a class="dropdown__see-all-btn" href="{{ get_page_link($topLevelPage->ID) }}" class="">Se allt inom {{ $topLevelPage->post_title }}</a>
						</div>
					</div>
				</nav>
				@endif
			</li>
			@endforeach
		</ul>
	</div>
</nav>
@endif