<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 px2">
				  @if (have_comments())
					<h2 class="h2 mb3">
					  {!! sprintf(_nx('1 svar till &ldquo;%2$s&rdquo;', '%1$s svar till &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
					</h2>

					<ol class="comments">
					  {!! 
						wp_list_comments([
							'style' => 'ol', 
							'short_ping' => true,
							'avatar_size' => 48
						])
					  !!}
					</ol>

					@if (get_comment_pages_count() > 1 && get_option('page_comments'))
					  <nav>
						<ul class="pager">
						  @if (get_previous_comments_link())
							<li class="previous">@php(previous_comments_link(__('&larr; Äldre kommentarer', 'sage')))</li>
						  @endif
						  @if (get_next_comments_link())
							<li class="next">@php(next_comments_link(__('Nyare kommentarer &rarr;', 'sage')))</li>
						  @endif
						</ul>
					  </nav>
					@endif
				  @endif

				  @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
					<div class="alert alert-warning">
					  {{ __('Kommentarerna är nu stängda.', 'sage') }}
					</div>
				  @endif
				<div class="panel">
					<div class="panel__body">
						@php(comment_form(array('submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn btn--primary" value="%4$s" />')))
					</div>
				</div>
			</div>
		</div>
	</div>
</div>