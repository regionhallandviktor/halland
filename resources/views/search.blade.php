@extends('layouts.app')

@section('content')
<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 px2">
			@if (!have_posts())
			<div class="alert alert-warning">
				{{  __('Sorry, no results were found.', 'sage') }}
			</div>
			{!! get_search_form(false) !!}
			@endif

			@while(have_posts()) @php(the_post())
			@include('partials.content-search')
			@endwhile
			</div>
		</div>
	</div>
</div>
@endsection
