@if(isset($breadcrumbs))
	<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
		@foreach ($breadcrumbs as $breadcrumb)
			<li class="breadcrumbs__item @if ($loop->last) active @endif" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
				@if ($breadcrumb['url'])
					<a class="breadcrumbs__link" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
				@else
					<span class="breadcrumbs__span" itemprop="name">{!! $breadcrumb['name'] !!}</span>
				@endif
				<meta itemprop="position" content="{{ $loop->iteration }}" />
			</li>
		@endforeach
	</ol>
@endif