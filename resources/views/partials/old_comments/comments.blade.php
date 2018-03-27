@php
if (post_password_required()) {
	return;
}
@endphp

<section id="comments">

	<h2 class="mb4">
		{!! sprintf(_nx('Ett svar till &ldquo;%2$s&rdquo;', '%1$s svar till &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
	</h2>
	<div class="reveal">
	<ul class="comments">
	@foreach ($comments as $comment)
		<li class="comments__comment p3 mb3">
			@include('partials.comments.comment', ['comment' => $comment])
		</li>
	@endforeach
	</ul>
	</div>
</section>

<ol class="comment-list">
      {!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
    </ol>
