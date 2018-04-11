<div class="alternation py4">

<div class="container mx-auto clearfix">
	<div class="col col-12 sm-col-9 px2">
		<article @php(post_class('article'))>	
			<header>
				<h1>{{ get_the_title() }}</h1>
			</header>

			@php(the_content())
			
			@include('partials.components.entry-meta')
		</article>

		<footer>
			{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
		</footer>
			
	</div>
	<div class="col col-12 sm-col-3 px2 d-print-none">

		<aside class="aside">
			@if(isset($categories))
				<h3>{{ __('Kategorier', 'sage') }}</h3>
				@foreach($categories as $item)
					<a href="{{ $item['url'] }}">{{ $item['name'] }}</a> 
					<span class="light small">({{ $item['count'] }})</span>@if (!$loop->last), @endif
				@endforeach
			@endif
		
			@if(isset($tags))
				<h3>{{ __('Taggar', 'sage') }}</h3>
				@foreach($tags as $item)
					<a href="{{ $item['url'] }}" class="btn btn--small btn--neutral mr2 mb2">
						{{ $item['name'] }}
					</a>
				@endforeach
			@endif
		
			<div id="content-nav"></div>
		</aside>
	</div>
</div>
</div>
<div class="alternation clearfix">
<div class="container mx-auto alternation clearfix py4">
		
	<div class="col-12 sm-col-9 px2">
		@php(comments_template('/partials/components/comments.blade.php'))
	</div>
</div>
</div>
