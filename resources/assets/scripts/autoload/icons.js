const Icons = (() => {

	const Modifiers = {
		DISPLAY_NONE: 'display-none',
	}

	class Icons {
		constructor() {
			this.spriteURL = 'https://regionhalland.github.io/styleguide/dist/icons/sprite.svg';
			this.getIcons(this.spriteURL);
		}

		getIcons(url) {
			$.get(url).done(data => {
				var div = document.createElement('div');
				div.className = Modifiers.DISPLAY_NONE;
				div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
				document.body.insertBefore(div, document.body.childNodes[0]);
			})
		}
	}

	return new Icons();
	
})();

export default Icons;
