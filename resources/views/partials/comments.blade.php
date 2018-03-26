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
		@for ($a = 0; $a < 3; $a++)
		
		
			<li class="mb3">
				<article class="comment article">
					<footer class="clearfix flex-grid height flex items-center mb3">	
						<img alt="" src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&amp;d=mm&amp;r=g 2x" class="img img--round flex-grid-item mr3" height="64" width="64">
						<span class="flex-grid-item small">
							<a href="http://example.com/" rel="external nofollow" class="url">
								A WordPress Commenter
							</a><br>
							<time datetime="2018-03-13T09:58:00+00:00">
								13 mars, 2018 kl. 09:58
							</time>
						</span> 						
					</footer>

					
						<p>Hi, this is a comment.<br>
	To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.<br>
	Commenter avatars come from <a href="https://gravatar.com">Gravatar</a>.</p>
					
					
						<a rel="nofollow" href="" aria-label="Svar till A WordPress Commenter" class="mt2">
							<svg class="icon icon--md fill-dark-blue">
								<use xlink:href="#comment-square" />
							</svg>
							 Svara
						</a>
					
				</article>
				<ul class="children">
					@for ($i = 0; $i < 5; $i++)
					<li class="comment">
						<article class="article">
							<footer class="clearfix flex-grid height flex items-center mb3">	
						<img alt="" src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=64&amp;d=mm&amp;r=g 2x" class="img img--round flex-grid-item mr3" height="64" width="64">
						<span class="flex-grid-item small">
							<a href="http://example.com/" rel="external nofollow" class="url">
								A WordPress Commenter
							</a><br>
							<time datetime="2018-03-13T09:58:00+00:00">
								13 mars, 2018 kl. 09:58
							</time>
						</span> 						
					</footer>

					
						<p>Hi, this is a comment.<br>
	To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.<br>
	Commenter avatars come from <a href="https://gravatar.com">Gravatar</a>.</p>
					
					
						</article>
						
					</li><!-- #comment-## -->
					@endfor
				</ul>
			</li>			
			@endfor
		</ul>
		</section>
		<ol>
		@php(wp_list_comments())
		</ol>
		{{--

			<ol>
		@php(wp_list_comments())
		</ol>
		
		@if(isset($comments))
			
			@foreach ($comments as $comment)
				<p> {{ $comment->comment_ID }} </p>
			@endforeach		

		@endif
--}}
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
			{{ __('Kommentarer är stängda för denna artikeln.', 'sage') }}
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
