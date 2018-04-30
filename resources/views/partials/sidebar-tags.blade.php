<aside class="article">
	<h3>{{ $title }}</h3>

	<ul class="tags clearfix">
		@foreach ($data as $item) 
			<li>
				<a href="{{ $item['href'] }}">
					{{ $item['label'] }}
				</a>
			</li>
		@endforeach
	</ul>
</aside>