@while(have_posts()) @php(the_post())
	@include('partials.article')
	@include('partials.updated-time')
@endwhile

