class Nav {
	constructor() {
		this.cache();
		this.bind();
	}

	cache() {
		this.$dropdown = $('.dropdown');
		this.$toggleSublistButtons = this.$dropdown.find('.dropdown__toggle-btn');
		this.$toggleNavButton = $('.main-nav__menu-btn');
	}

	bind() {
		this.$toggleSublistButtons.each((i, el) => {
			el = $(el);
			let sublist = $(el.siblings('.dropdown__sublist'));
			
			el.on('click', () => {
				this.toggleSublist(sublist[0]);
			});
		});
		this.$toggleNavButton.on('click', () => {
			this.toggleNav();
		})
	}

	toggleSublist(el) {
		$(el).toggleClass('is-open')
	}

	toggleNav() {
		this.$dropdown.toggleClass('is-open');
	}
}

export default new Nav();
