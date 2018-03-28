import 'jquery';

class ContentNav {
	constructor(container, tags, menu = '#content-nav') {

		this.name = 'ContentNav';
		this.menu = $(menu);
		this.container = $(container);
		this.tags = $(tags, this.container);

		this.slider;

		this.makeTags();
		this.makeMenu();

		this.initScroll();

	}

	changeSliderHeight(int) {
		$(this.slider).height(int);
	}

	makeMenu() {
		var ul, all_li;

		this.menu.append('<span class="content-nav__heading">På denna sidan:</span>');
		this.menu.append('<div class="clearfix content-nav__container"><div class="content-nav__slider"></div><ul class="content-nav__menu"></ul></div>');
		this.menu.addClass('content-nav');

		ul = $('.content-nav__menu', this.menu);
		$.each(this.tags, (index, e) => {
			ul.append('<li class="content-nav__item"><a href="#'+ $(e).attr('id') +'">'+ $(e).text() +'</a></li>');
		});	

		all_li = $('li', ul);
		console.log(all_li[0]);

		this.slider = $('.content-nav__slider', this.menu);
		this.changeSliderHeight($(all_li[0]).height());
	}

	makeTags() {
		this.tags.each( (index, e) => {
			$(e).attr('id', 'contentNav_'+index);
		});
	}

	initScroll() {
		var containerHeight = this.container.height();
		var containerOffset = this.container.position().top;
		var menuHeight = this.menu.height();
		var scrollPos = $(document).scrollTop();



		$(document).on('scroll', () => {
			scrollPos = $(document).scrollTop();

			var percentage = ((scrollPos - containerOffset) / containerHeight);
			this.slider.css('margin-top', menuHeight * percentage);
		})
	}

}

export default ContentNav;
