@php
if (post_password_required()) {
	return;
}
@endphp

<section id="comments" class="comments">
	@if (have_comments())
		<h2>
			{!! sprintf(_nx('Ett svar till &ldquo;%2$s&rdquo;', '%1$s svar till &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
		</h2>

		<ol class="comment-list">
			{!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
		</ol>

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
			'comment_field' => 	'<p class="comment-form-comment"><label for="comment" class="label">' . _x( 'Comment', 'noun' ) .
								'</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="textarea">' .
    							'</textarea></p>',
    		'logged_in_as' => 	'<p class="logged-in-as mb3">' .
    								sprintf(
    									__( 'Inloggad som <a href="%1$s">%2$s</a>. <a href="%3$s" title="Logga ut från detta kontot" class="btn btn--outline btn__small">Logga ut?</a>' ),
      								admin_url( 'profile.php' ),
      								$user_identity,
									wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )) . 
								'</p>',
		)))
	</div>
	</div>
</section>
