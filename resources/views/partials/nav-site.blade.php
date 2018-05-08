@if(isset($nav_site))
<nav class="site-nav">
	<div class="site-nav__top">
		<div class="site-nav__container">
			<a href="{{ esc_url( home_url( '/' ) ) }}" class="site-nav__logo">
				<img src="@asset('images/navigation_logo.svg')">
			</a>
			<button class="site-nav__menu-btn">
				<svg class="icon-badge icon-badge--md">
					<use xlink:href="#menu"/>
				</svg>
			</button>
		</div>
	</div>
	<div class="site-nav__bottom">
		<div class="site-nav__container">
			<ul class="site-nav__list">
				@foreach($nav_site as $topLevelPage)
				<li class="site-nav__item">
					<a href="#" onclick="return false" class="site-nav__link {{ $topLevelPage->active ? 'active' : '' }}">{{ $topLevelPage->post_title }}</a>
				
					@if(isset($topLevelPage->children))
					<nav class="dropdown">
						<div class="site-nav__container">
							<ul class="dropdown__list">
								@foreach($topLevelPage->children as $childPage)
								<li class="dropdown__item">
									<a href="{{ get_page_link($childPage->ID) }}" class="dropdown__link">{{ $childPage->post_title }}</a>
									<span class="dropdown__link-description"></span>
								</li>
								@endforeach
							</ul>
							<div class="dropdown__see-all">
							<a class="dropdown__see-all-btn" href="{{ get_page_link($topLevelPage->ID) }}">
								<span class="mr1">Se allt inom {{ $topLevelPage->post_title }}</span>
								<svg class="icon-badge icon-badge--md">
									<use xlink:href="#arrow-right"/>
								</svg>
							</a>
							</div>
						</div>
					</nav>
					@endif
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</nav>
<div class="site-nav-overlay"></div>
@endif