class Nav {
	constructor() {
		this.classes = {
			NAV: '.site-nav',
			NAV_ITEM: '.site-nav__item',
			NAV_LINK: '.site-nav__link',
			NAV_DROPDOWN: '.dropdown',
			NAV_TOGGLE_BTN: '.site-nav__menu-btn',
		};

		this.states = {
			OPEN: 'open',
			ACTIVE: 'active',
		};

		// Init
		this.cache();
		this.bind();
	}

	cache() {
		this.$nav = $(this.classes.NAV);
		this.$toggleDropdownItems = this.$nav.find(this.classes.NAV_ITEM);
		this.$dropdowns = this.$nav.find(this.classes.NAV_DROPDOWN);
		this.$toggleNavButton = $(this.classes.NAV_TOGGLE_BTN);
	}

	bind() {
		this.$toggleDropdownItems.each((i, el) => {
			$(el).on('click', () => this.toggle(el));
		});
	}

	toggle(target) {
		for (let i = 0; i < this.$toggleDropdownItems.length; i++) {
			let $item = $(this.$toggleDropdownItems[i]);
			let $link = $item.children(this.classes.NAV_LINK);
			let $dropdown = $item.children(this.classes.DROPDOWN);

			if (this.$toggleDropdownItems[i] === target) {
				if ($item.hasClass(this.states.OPEN)) {
					$item.removeClass(this.states.OPEN);
					$link.removeClass(this.states.ACTIVE);
					$dropdown.removeClass(this.states.OPEN);
				} else {
					$item.addClass(this.states.OPEN);
					$link.addClass(this.states.ACTIVE);
					$dropdown.addClass(this.states.OPEN);
				}
			} else {
				$item.removeClass(this.states.OPEN);
				$link.removeClass(this.states.ACTIVE);
				$dropdown.removeClass(this.states.OPEN);
			}
		}
	}
}

export default new Nav();
