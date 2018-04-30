// import external dependencies
import 'jquery';
import ContentNav from './../functions/content-nav';

export default {
	init() {
		this.nav = new ContentNav('main article.article.post', 'h1, h2, h3' );
	},
};
