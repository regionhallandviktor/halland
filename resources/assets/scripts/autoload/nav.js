class Nav {
	constructor() {
		this.cache();
		this.bind();
	}

	cache() {
		this.$nav = $('.site-nav');
		this.$toggleDropdownButtons = this.$nav.find('.site-nav__item');
		this.$dropdowns = this.$nav.find('.dropdown');
		this.$toggleNavButton = $('.site-nav__menu-btn');
	}

	bind() {
		this.$toggleDropdownButtons.each((i, el) => {
			el = $(el);
			let dropdown = $(el.find('.dropdown'));
			
			el.on('click', () => {
				this.toggleDropdown(dropdown[0]);
			});
		});
		this.$toggleNavButton.on('click', () => {
			this.toggleNav();
		})
	}

	toggleDropdown(el) {
		$(el).hasClass('open') ?
			$(el).removeClass('open') : $(el).addClass('open');
	}

	toggleNav() {
		this.$dropdown.toggleClass('open');
	}
}

export default new Nav();
