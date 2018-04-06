@if(isset($nav_sidebar))
<nav class="sidebar-nav">
	<ul class="sidebar-nav__list">
		<li class="sidebar-nav__item active">
			<span class="sidebar-nav__label">{{ $nav_sidebar['current_page']->post_title }}</span>
			@if (!empty($nav_sidebar['page_children']))
				<ul class="sidebar-nav__sublist">
					@foreach ($nav_sidebar['page_children'] as $page_child)
						<li class="sidebar-nav__item">
							<a class="sidebar-nav__link" href={{ $page_child->url }}>{{ $page_child->post_title }}</a>
						</li>
					@endforeach
				</ul>
			@endif
		</li>
	</ul>
</nav>
@endif