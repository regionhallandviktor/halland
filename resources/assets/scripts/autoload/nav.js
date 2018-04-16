class Nav {
	constructor() {
		// Classnames
		this.OPEN = 'open';
		this.ACTIVE = 'active';

		// Init
		this.cache();
		this.bind();
	}

	cache() {
		this.$nav = $('.site-nav');
		this.$toggleDropdownItems = this.$nav.find('.site-nav__item');
		this.$toggleDropdownLinks = this.$toggleDropdownItems.find('.site-nav__link');
		this.$dropdowns = this.$nav.find('.dropdown');
		this.$toggleNavButton = $('.site-nav__menu-btn');
	}

	bind() {
		this.$toggleDropdownItems.each((i, el) => {
			el = $(el);
			let dropdown = $(el.find('.dropdown'));
			console.log(dropdown);
			
			el.on('click', () => {
				this.toggleDropdown(dropdown[0]);
			});
		});
		this.$toggleNavButton.on('click', () => {
			this.toggleNav();
		})
	}

	toggleDropdown(el) {
		this.closeDropdowns();
		$(el).hasClass(this.OPEN) ?
			$(el).removeClass(this.OPEN) : $(el).addClass(this.OPEN);
	}

	closeDropdowns() {
		this.$dropdowns.removeClass(this.OPEN);
	}

	toggleNav() {
		this.$dropdown.toggleClass(this.OPEN);
	}
}

export default new Nav();
