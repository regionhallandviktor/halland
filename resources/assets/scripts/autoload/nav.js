class Nav {
	constructor() {
		this.classes = {
			NAV: '.site-nav',
			NAV_LIST: '.site-nav__list',
			NAV_ITEM: '.site-nav__item',
			NAV_LINK: '.site-nav__link',
			NAV_DROPDOWN: '.dropdown',
			NAV_TOGGLE_BTN: '.site-nav__menu-btn',
			OPEN: 'open',
			OPEN_SIBLING: 'open-sibling',
			ACTIVE: 'active',
		};

		// Init
		this.cache();
		this.bind();
	}

	cache() {
		this.$nav = $(this.classes.NAV);
		this.$navList = this.$nav.find(this.classes.NAV_LIST);
		this.$navItems = this.$nav.find(this.classes.NAV_ITEM);
		this.$navLinks = this.$nav.find(this.classes.NAV_LINK);
		this.$dropdowns = this.$nav.find(this.classes.NAV_DROPDOWN);
		this.$toggleNavButton = $(this.classes.NAV_TOGGLE_BTN);
	}

	bind() {
		this.$navLinks.each((i, el) => {
			$(el).on('click', (event) => this.toggle(event.target));
		});
	}

	toggle(target) {

		for (let i = 0; i < this.$navLinks.length; i++) {
			let $item = $(this.$navItems[i]);
			let $link = $item.children(this.classes.NAV_LINK);
			let $dropdown = $item.children(this.classes.DROPDOWN);

			if ($item[0] === $(target).parent()[0]) {
				if ($item.hasClass(this.classes.OPEN)) {
					$item.removeClass(this.classes.OPEN);
					$link.removeClass(this.classes.OPEN);
					$dropdown.removeClass(this.classes.OPEN);
				} else {
					$item.addClass(this.classes.OPEN);
					$link.addClass(this.classes.OPEN);
					$dropdown.addClass(this.classes.OPEN);
				}
			} else {
				$item.removeClass(this.classes.OPEN);
				$link.removeClass(this.classes.OPEN);
				$dropdown.removeClass(this.classes.OPEN);
			}
		}
	}
}

export default new Nav();
