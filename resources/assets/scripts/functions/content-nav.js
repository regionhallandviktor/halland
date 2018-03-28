import 'jquery';

class ContentNav {
	constructor(container, tags, menu = '#content-nav') {

		this.name = 'ContentNav';
		this.menu = $(menu);
		this.container = $(container);
		this.tags = $(tags, this.container);
		this.furnishMenu();
		this.furnishTags();
		this.createMenu();
	}

	furnishMenu() {
		this.menu.append('<span class="content-nav__heading">På denna sidan:</span>');
		this.menu.append('<ul></ul>');
		this.menu.addClass('content-nav');

		$(document).on('scroll', (index) => {
			console.log('scrolling', index);
		})
	}
	
	furnishTags() {
		this.tags.each( (index) => {
			$( this ).attr('id', 'contentNav_'+index);
		});
	}

	createMenu() {
		this.ul = $('ul', this.menu);
		$.each(this.tags, (index, e) => {
			this.ul.append('<li class="content-nav__item"><a href="#'+ $(e).attr('id') +'">'+ $(e).text() +'</a></li>');
		});	
	}

	bind() {
		/*
		this.consentBtn.on('click', () => {
			this.removeNotice();
			this.setCookie(this.name);
		})
		*/
	}
}

export default ContentNav;
