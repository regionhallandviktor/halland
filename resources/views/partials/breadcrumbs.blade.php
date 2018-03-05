@if(isset($breadcrumbs))
	<ol itemscope itemtype="http://schema.org/BreadcrumbList">
		@foreach ($breadcrumbs as $breadcrumb)
			<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
				@if ($breadcrumb['url'])
					<a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
				@else
					<span itemprop="name">{{ $breadcrumb['name'] }}</span>
				@endif
				<meta itemprop="position" content="{{ $loop->iteration }}" />
			</li>
		@endforeach
	</ol>
@endif