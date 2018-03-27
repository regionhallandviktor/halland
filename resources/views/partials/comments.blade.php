@php
if (post_password_required()) {
	return;
}
@endphp

<section id="comments">
	

	
	@if (have_comments())
		<h2>
			{!! sprintf(_nx('Ett svar till &ldquo;%2$s&rdquo;', '%1$s svar till &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
		</h2>
	
			<ul class="comments">

			@php
				foreach($comments as $comment):
			@endphp

			<li class="mb3">
				<article class="comment article">
					<footer class="clearfix flex-grid height flex items-center mb3">	
						<img 
							alt="" 
							src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $comment->comment_author_email ))) }}&amp;d={{ urlencode(\App\asset_path('images/avatar@96w.png')) }}&amp;s=96"
							srcset="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $comment->comment_author_email ))) }}&amp;d={{ urlencode(\App\asset_path('images/avatar@96w.png')) }}&amp;s=96&amp;d=mm&amp;r=g 2x" 
							class="img img--round flex-grid-item mr2" 
							height="48" 
							width="48"
						>
						<span class="flex-grid-item">
							
							<a href="{{ $comment->comment_author_url }}" rel="external nofollow" class="url">
								{{ $comment->comment_author }}
							</a> • 
							<time datetime="{{ $comment->comment_date }}" class="small text-grey">
								{{ $comment->comment_date }}
							</time>
						</span>					
					</footer>

					<p>
						{{ html_entity_decode( htmlentities( $comment->comment_content ) ) }}			
					</p>
						
					<a rel="nofollow" href="" aria-label="Svar till A WordPress Commenter" class="mt2">
						<svg class="icon icon--md fill-dark-blue">
							<use xlink:href="#comment-square" />
						</svg>
						 {{ __('Svara', 'sage') }}
					</a>
				</article>
			</li>
		@php
			endforeach;
		@endphp
	</ul>
		
	@if (get_comment_pages_count() > 1 && get_option('page_comments'))
		<nav>
			<ul class="pager clearfix">
				@if (get_previous_comments_link())
					<li class="previous left">@php(previous_comments_link(__('&larr; Äldre kommentarer', 'sage')))</li>
				@endif
				@if (get_next_comments_link())
					<li class="next right">@php(next_comments_link(__('Nyare kommentarer &rarr;', 'sage')))</li>
				@endif
			</ul>
		</nav>
	@endif
@endif
	
	@if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
	<div class="panel">
		<div class="panel__body">
			<p>{{ __('Kommentarer är stängda för denna artikeln.', 'sage') }}</p>
		</div>
	</div>
	@endif

	<div class="panel">
		<div class="panel__body">

					@php(comment_form(array(
			'class_submit' => 	'btn btn--primary',
    		'logged_in_as' => 	'<p class="logged-in-as mb3">' .
    								sprintf(
    									__( 'Inloggad som <a href="%1$s">%2$s</a>. <a href="%3$s" title="Logga ut från detta kontot" class="btn btn--outline btn--small">Logga ut?</a>' ),
      								admin_url( 'profile.php' ),
      								$user_identity,
									wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )) . 
								'</p>',
		)))
		</div>
	</div>
</section>
