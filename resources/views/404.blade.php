@extends('layouts.app')

@section('content')

	@if (!have_posts())
		<div class="alert alert-warning">
			{{ __('Doh! Sidan du sökte finns inte.', 'halland') }}
		</div>
		{!! get_search_form(false) !!}
	@endif
@endsection
