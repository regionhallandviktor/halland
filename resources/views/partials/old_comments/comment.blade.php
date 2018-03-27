<article class="article">
	<footer class="clearfix flex-grid height flex items-center mb3">	
		<span class="flex-grid-item">
			<img
				alt="" 
				src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $comment->comment_author_email ))) }}&amp;d={{ urlencode(\App\asset_path('images/avatar@96w.png')) }}&amp;s=96"
				srcset="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $comment->comment_author_email ))) }}&amp;d={{ urlencode(\App\asset_path('images/avatar@96w.png')) }}&amp;s=96&amp;d=mm&amp;r=g 2x" 
				class="img img--round flex-grid-item mr2" 
				height="48" 
				width="48"
			>
				
			<a href="{{ $comment->comment_author_url }}" rel="external nofollow" class="url">
				{{ $comment->comment_author }}
			</a> • 
			<time datetime="{{ $comment->comment_date }}" class="small text-grey">
				{{ $comment->comment_date }}
			</time>
		</span>					
	</footer>

	<p>
		{{ html_entity_decode(htmlentities($comment->comment_content)) }}			
	</p>
		
		{!! get_comment_reply_link() !!}

	<a href="">
		<svg class="icon icon--md fill-dark-blue"><use xlink:href="#comment-square" /></svg> {{ __('Svara', 'sage') }}
	</a>
</article>