@if($sidebar_menu)
	<ul>
		<li>
			{{ $sidebar_menu['current_page']->post_title }}
			@if (!empty($sidebar_menu['page_children']))
				<ul>
					@foreach ($sidebar_menu['page_children'] as $page_child)
						<li>
							<a href={{ $page_child->url }}>{{ $page_child->post_title }}</a>
						</li>
					@endforeach
				</ul>
			@endif
		</li>
	</ul>
@endif