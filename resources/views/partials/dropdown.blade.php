{{-- @php(var_dump($dropdown)) --}}

{{-- @if(isset($dropdown))
<nav class="dropdown">
	<div class="dropdown__container">
		<ul class="dropdown__list">
		@foreach ($dropdown->topLevelPages as $page)
			<li class="dropdown__item @if($dropdown->secondLevelPages[$page->ID]) has-sublist @endif ">
				<a href="{{ get_permalink($page->ID) }}" class="dropdown__link">{!! $page->post_title !!}</a>
				@if($dropdown->secondLevelPages[$page->ID])
				<button class="dropdown__toggle-btn">
					<svg class="icon--sm">
						<use xlink:href="#caret-bottom"/>
					</svg>
				</button>
				<ul class="dropdown__sublist">
				@foreach ($dropdown->secondLevelPages[$page->ID] as $page)
					<li class="dropdown__item">
						<a href="{{ get_permalink($page->ID) }}" class="dropdown__link">{!! $page->post_title !!}</a>
					</li>
				@endforeach
				</ul>
				@endif
			</li>
		@endforeach
		</ul>
	</div>
</nav>
@endif --}}