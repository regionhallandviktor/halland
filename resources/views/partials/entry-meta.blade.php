<div class="pt4">
	<p class="light small">
		<strong>{{ __('Skrivet av', 'sage') }}: </strong>
		<a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
			{{ get_the_author() }}
		</a>
	</p>
	<hr>
	<p class="light small">
		<strong>{{ __('Publiceringsdatum', 'sage') }}: </strong>
		<time class="created" datetime="{{ get_post_time('c', true) }}">
			{{ get_the_date() }}  {{ get_the_time() }} 
		</time> - 
		<strong>{{ __('Uppdaterad', 'sage') }}: </strong>
		<time class="updated" datetime="{{ get_post_modified_time('c', true) }}">
			 {{ get_the_modified_date() }} {{ __('kl', 'sage') }} {{ get_the_modified_time() }}
		</time>
	</p>
</div>