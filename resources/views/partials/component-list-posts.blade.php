<ul class="list list--none">
@foreach($blogposts as $blogpost)
	
	<li class="li--border-bottom">
		<h3 class="mb0"><a href="@php( the_permalink($blogpost) )">{{ $blogpost->post_title }}</a></h3>
		<p class="small light mt0">
			@include('partials.updated-time', ['post' => $blogpost])
		</p>
		@if($blogpost->post_excerpt)
		<p>{{ get_the_excerpt($blogpost) }}</p>
		@endif
	</li>

@endforeach
</ul>