@if (isset($cookie_notice))
	<div id="cookie-notice" class="notice">
		<p class="notice__text">{!! $cookie_notice['message'] !!}</p>
		<button class="notice__button" id="cookie-consent">{!! $cookie_notice['button'] !!}</button>
	</div>
@endif
