// import external dependencies
import 'jquery';
import ContentNav from './../functions/content-nav';

export default {
	init() {
		console.log('msg')
		this.nav = new ContentNav('.article', 'h1, h2, h3' );
	},
};
