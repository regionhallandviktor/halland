@if (isset($notices) && !empty($notices))
	@foreach ($notices as $notice)
		<div class="notice col-12 p2 mb2 background-yellow">
			<div class="container mx-auto">
				<div class="col-12 px2">
					<div class="notice__text">
						<svg class="icon mr2">
							<use href="#bell">
						</svg><div class="notice__text inline-block">{!! $notice['notice_message'] !!}</div>
					</div>
				</div>
			</div>
		</div>
	@endforeach
@endif

