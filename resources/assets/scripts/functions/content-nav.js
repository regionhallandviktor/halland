import 'jquery';

class ContentNav {
	constructor(container, tags) {
		this.container = $(container);
		this.tags = $(tags);
		this.name = 'content_nav';
		this.bind();

		console.log(this.tags, this.container)
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
