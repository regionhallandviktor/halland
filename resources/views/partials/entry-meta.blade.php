<p class="light clearfix">
{{ __('Publiceringsdatum', 'sage') }}: <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>

<span class="right">
	{{ __('Innehållsansvarig', 'sage') }}: 
	<a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
		{{ get_the_author() }}
	</a>
</span>
</p>
