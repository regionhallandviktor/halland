<aside class="article">
	<h3>{{ $title }}</h3>

		@foreach ($data as $item) 
			<a href="{{ $item['href'] }}">{{ $item['label'] }}</a><span class="small light">({{ $item['count'] }})</span>@if (!$loop->last), @endif
			
		@endforeach
	
</aside>