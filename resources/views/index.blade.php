@extends('layouts.app')

@section('content')
<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
		@if (!have_posts())
			<div class="alert alert-warning">
				{{ __('Oj, här var det tomt!', 'sage') }}
			</div>
			{!! get_search_form(false) !!}
		@endif

		@while (have_posts()) @php(the_post())
			@include('partials.content-'.get_post_type())
		@endwhile
		</div>
	</div>
</div>
@endsection
