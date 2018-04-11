@extends('layouts.app')

@section('content')

<div class="py4 px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 px2">
				@if (!have_posts())
				<div class="alert alert-warning">
					{{ __('Doh! Sidan du sökte finns inte.', 'halland') }}
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection
