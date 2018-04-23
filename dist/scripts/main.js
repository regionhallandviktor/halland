/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/app/themes/halland/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
module.exports = __webpack_require__(13);


/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__autoload_cookie_notice_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__autoload_icons_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__autoload_nav_js__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__util_Router__ = __webpack_require__(7);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__routes_common__ = __webpack_require__(9);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__routes_home__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__routes_single__ = __webpack_require__(11);
// import external dependencies


// Import everything from autoload
  

// import local dependencies





/** Populate Router instance with DOM routes */
var routes = new __WEBPACK_IMPORTED_MODULE_4__util_Router__["a" /* default */]({
	// All pages
	common: __WEBPACK_IMPORTED_MODULE_5__routes_common__["a" /* default */],
	// Home page
	home: __WEBPACK_IMPORTED_MODULE_6__routes_home__["a" /* default */],
	// Single blogposts etc.
	single: __WEBPACK_IMPORTED_MODULE_7__routes_single__["a" /* default */],
});

// Load Events
jQuery(document).ready(function () { return routes.loadEvents(); });

/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_js_cookie__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_js_cookie___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_js_cookie__);


var CookieNotice = function CookieNotice() {
	this.name = 'cookie_notice_accepted';

	if (this.getCookie(this.name) !== undefined) {
		return;
	}

	this.cache();
	this.bind();
};

CookieNotice.prototype.cache = function cache () {
	this.container = $('#cookie-notice');
	this.consentBtn = this.container.find('#cookie-consent');
};

CookieNotice.prototype.bind = function bind () {
		var this$1 = this;

	this.consentBtn.on('click', function () {
		this$1.removeNotice();
		this$1.setCookie(this$1.name);
	})
};

CookieNotice.prototype.removeNotice = function removeNotice () {
	this.container.remove();
};

CookieNotice.prototype.getCookie = function getCookie (name) {
	return __WEBPACK_IMPORTED_MODULE_0_js_cookie___default.a.get(name);
};

CookieNotice.prototype.setCookie = function setCookie (name) {
	return __WEBPACK_IMPORTED_MODULE_0_js_cookie___default.a.set(name, 'true', { expires: 100 });
};

/* unused harmony default export */ var _unused_webpack_default_export = (new CookieNotice());

/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
 * JavaScript Cookie v2.2.0
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
;(function (factory) {
	var registeredInModuleLoader = false;
	if (true) {
		!(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
		registeredInModuleLoader = true;
	}
	if (true) {
		module.exports = factory();
		registeredInModuleLoader = true;
	}
	if (!registeredInModuleLoader) {
		var OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = OldCookies;
			return api;
		};
	}
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (; i < arguments.length; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function init (converter) {
		function api (key, value, attributes) {
			var result;
			if (typeof document === 'undefined') {
				return;
			}

			// Write

			if (arguments.length > 1) {
				attributes = extend({
					path: '/'
				}, api.defaults, attributes);

				if (typeof attributes.expires === 'number') {
					var expires = new Date();
					expires.setMilliseconds(expires.getMilliseconds() + attributes.expires * 864e+5);
					attributes.expires = expires;
				}

				// We're using "expires" because "max-age" is not supported by IE
				attributes.expires = attributes.expires ? attributes.expires.toUTCString() : '';

				try {
					result = JSON.stringify(value);
					if (/^[\{\[]/.test(result)) {
						value = result;
					}
				} catch (e) {}

				if (!converter.write) {
					value = encodeURIComponent(String(value))
						.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);
				} else {
					value = converter.write(value, key);
				}

				key = encodeURIComponent(String(key));
				key = key.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent);
				key = key.replace(/[\(\)]/g, escape);

				var stringifiedAttributes = '';

				for (var attributeName in attributes) {
					if (!attributes[attributeName]) {
						continue;
					}
					stringifiedAttributes += '; ' + attributeName;
					if (attributes[attributeName] === true) {
						continue;
					}
					stringifiedAttributes += '=' + attributes[attributeName];
				}
				return (document.cookie = key + '=' + value + stringifiedAttributes);
			}

			// Read

			if (!key) {
				result = {};
			}

			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all. Also prevents odd result when
			// calling "get()"
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var rdecode = /(%[0-9A-Z]{2})+/g;
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var cookie = parts.slice(1).join('=');

				if (!this.json && cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					var name = parts[0].replace(rdecode, decodeURIComponent);
					cookie = converter.read ?
						converter.read(cookie, name) : converter(cookie, name) ||
						cookie.replace(rdecode, decodeURIComponent);

					if (this.json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					if (key === name) {
						result = cookie;
						break;
					}

					if (!key) {
						result[name] = cookie;
					}
				} catch (e) {}
			}

			return result;
		}

		api.set = api;
		api.get = function (key) {
			return api.call(api, key);
		};
		api.getJSON = function () {
			return api.apply({
				json: true
			}, [].slice.call(arguments));
		};
		api.defaults = {};

		api.remove = function (key, attributes) {
			api(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.withConverter = init;

		return api;
	}

	return init(function () {});
}));


/***/ }),
/* 5 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {var Icons = function Icons() {
	this.spriteURL = 'https://regionhalland.github.io/styleguide/dist/icons/sprite.svg';
	this.getIcons(this.spriteURL);
};

Icons.prototype.getIcons = function getIcons (url) {
	$.get(url).done(function (data) {
		var div = document.createElement('div');
		div.className = 'display-none';
		div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
		document.body.insertBefore(div, document.body.childNodes[0]);
	})
};

/* unused harmony default export */ var _unused_webpack_default_export = (new Icons());

/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),
/* 6 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {var Nav = function Nav() {
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
};

Nav.prototype.cache = function cache () {
	this.$nav = $(this.classes.NAV);
	this.$navList = this.$nav.find(this.classes.NAV_LIST);
	this.$navItems = this.$nav.find(this.classes.NAV_ITEM);
	this.$navLinks = this.$nav.find(this.classes.NAV_LINK);
	this.$dropdowns = this.$nav.find(this.classes.NAV_DROPDOWN);
	this.$toggleNavButton = $(this.classes.NAV_TOGGLE_BTN);
};

Nav.prototype.bind = function bind () {
		var this$1 = this;

	this.$navLinks.each(function (i, el) {
		$(el).on('click', function (event) { return this$1.toggleItem(event.target); });
	});
};

Nav.prototype.toggleItem = function toggleItem (target) {
		var this$1 = this;

	for (var i = 0; i < this.$navLinks.length; i++) {
		var $item = $(this$1.$navItems[i]);
		var $link = $item.children(this$1.classes.NAV_LINK);
		var $dropdown = $item.children(this$1.classes.DROPDOWN);

		if ($item[0] === $(target).parent()[0]) {
			if ($item.hasClass(this$1.classes.OPEN)) {
				$item.removeClass(this$1.classes.OPEN);
				$link.removeClass(this$1.classes.OPEN);
				$dropdown.removeClass(this$1.classes.OPEN);
			} else {
				$item.addClass(this$1.classes.OPEN);
				$link.addClass(this$1.classes.OPEN);
				$dropdown.addClass(this$1.classes.OPEN);
			}
		} else {
			$item.removeClass(this$1.classes.OPEN);
			$link.removeClass(this$1.classes.OPEN);
			$dropdown.removeClass(this$1.classes.OPEN);
		}
	}
};

/* unused harmony default export */ var _unused_webpack_default_export = (new Nav());

/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),
/* 7 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__camelCase__ = __webpack_require__(8);


/**
 * DOM-based Routing
 *
 * Based on {@link http://goo.gl/EUTi53|Markup-based Unobtrusive Comprehensive DOM-ready Execution} by Paul Irish
 *
 * The routing fires all common scripts, followed by the page specific scripts.
 * Add additional events for more control over timing e.g. a finalize event
 */
var Router = function Router(routes) {
  this.routes = routes;
};

/**
 * Fire Router events
 * @param {string} route DOM-based route derived from body classes (`<body class="...">`)
 * @param {string} [event] Events on the route. By default, `init` and `finalize` events are called.
 * @param {string} [arg] Any custom argument to be passed to the event.
 */
Router.prototype.fire = function fire (route, event, arg) {
    if ( event === void 0 ) event = 'init';

  var fire = route !== '' && this.routes[route] && typeof this.routes[route][event] === 'function';
  if (fire) {
    this.routes[route][event](arg);
  }
};

/**
 * Automatically load and fire Router events
 *
 * Events are fired in the following order:
 ** common init
 ** page-specific init
 ** page-specific finalize
 ** common finalize
 */
Router.prototype.loadEvents = function loadEvents () {
    var this$1 = this;

  // Fire common init JS
  this.fire('common');

  // Fire page-specific init JS, and then finalize JS
  document.body.className
    .toLowerCase()
    .replace(/-/g, '_')
    .split(/\s+/)
    .map(__WEBPACK_IMPORTED_MODULE_0__camelCase__["a" /* default */])
    .forEach(function (className) {
      this$1.fire(className);
      this$1.fire(className, 'finalize');
    });

  // Fire common finalize JS
  this.fire('common', 'finalize');
};

/* harmony default export */ __webpack_exports__["a"] = (Router);


/***/ }),
/* 8 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * the most terrible camelizer on the internet, guaranteed!
 * @param {string} str String that isn't camel-case, e.g., CAMeL_CaSEiS-harD
 * @return {string} String converted to camel-case, e.g., camelCaseIsHard
 */
/* harmony default export */ __webpack_exports__["a"] = (function (str) { return ("" + (str.charAt(0).toLowerCase()) + (str.replace(/[\W_]/g, '|').split('|')
  .map(function (part) { return ("" + (part.charAt(0).toUpperCase()) + (part.slice(1))); })
  .join('')
  .slice(1))); });;


/***/ }),
/* 9 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = ({
	init: function init() {
		// JavaScript to be fired on all pages
	},
	finalize: function finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
});


/***/ }),
/* 10 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = ({
  init: function init() {
    // JavaScript to be fired on the home page
  },
  finalize: function finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
});


/***/ }),
/* 11 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__functions_content_nav__ = __webpack_require__(12);
// import external dependencies



/* harmony default export */ __webpack_exports__["a"] = ({
	init: function init() {
		this.nav = new __WEBPACK_IMPORTED_MODULE_1__functions_content_nav__["a" /* default */]('.article', 'h1, h2, h3' );
	},
});


/***/ }),
/* 12 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);


var ContentNav = function ContentNav(container, tags, menu) {
	if ( menu === void 0 ) menu = '#content-nav';


	this.posY 				= $(document).scrollTop();

	this.container 			= $(container);
	this.containerHeight 	= this.container.height();
	this.containerOffset 	= this.container.position().top;
		
	this.menu 				= $(menu);
	this.menuHeight;
	this.menuOffset;
	this.pairs				= [];
	this.slider;

	this.tags 				= $(tags, this.container);
	this.currentPair		= null;

	//Do stuff

	this.createMenu();
	this.init();

};

/*
	 *    GETTERS AND SETTERS
	 */

ContentNav.prototype.changeSliderHeight = function changeSliderHeight (int) {
	$(this.slider).height(int);
};

ContentNav.prototype.getSliderHeight = function getSliderHeight () {
	return $(this.slider).height();
};

/*
	 *    CREATE FUNCTIONS
	 */

ContentNav.prototype.createMenu = function createMenu () {
		var this$1 = this;

	var ul;
	var idHash = 'content_nav_'+Date.now();

	this.menu.addClass('content-nav');
	this.menu.append('<span class="content-nav__heading" id="'+idHash+'">På denna sidan:</span>');
	this.menu.append('<div class="clearfix content-nav__container"><div class="content-nav__slider relative"></div><ul class="content-nav__menu" aria-labelledby="'+idHash+'"></ul></div>');
		
	ul = $('.content-nav__menu', this.menu);

	$.each(this.tags, function (index, e) {

		var id = this$1.urlify(index+' '+$(e).text());
		$(e).attr('id', id);

		ul.append('<li class="content-nav__item"><a href="#'+ $(e).attr('id') +'">'+ $(e).text() +'</a></li>');

		this$1.pairs.push({
			'tag': $(e),
			'link': $('li', ul).last(),
		});

	});	

	this.slider = $('.content-nav__slider', this.menu);
	this.menuOffset = this.menu.position().top;
	this.menuHeight = this.menu.height();

};

ContentNav.prototype.urlify = function urlify (str) {		
	return str.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-+|-+$/g, "-").replace(/^-+|-+$/g, '');
};

/*
	 *    FIRE THINGS UP!
	 */

ContentNav.prototype.setSlider = function setSlider (normal) {
		if ( normal === void 0 ) normal = true;

	var h,t;

	var offset = this.pairs[0].link.position().top;

	if(!normal) {
		h = 0;
		t = 0;
	} else {
		var menuitem = this.currentPair.link;
		h = menuitem.height();
		t = menuitem.position().top - offset;
	}
		
	this.slider.css({
		'height': h,
		'top': t,
	});	
};

ContentNav.prototype.onScrollCommon = function onScrollCommon () {
	this.posY = $(document).scrollTop();
};

ContentNav.prototype.onSetActiveId = function onSetActiveId () {
		var this$1 = this;


	var c = this.currentPair;

	if (this.posY > $(this.pairs[0].tag).position().top) {
		for (var i = 0; i < this.pairs.length; i++) {
			var currentTop = this$1.pairs[i].tag.position().top;
				
			if( (this$1.posY - currentTop) > 0 ) {
				this$1.currentPair = this$1.pairs[i];
			}
		}
	} else {
		this.currentPair = null;
		this.setSlider(false);
	}

	if(c != this.currentPair && this.currentPair != null) {
		this.setSlider();
	}
		
};

ContentNav.prototype.onScrollMenu = function onScrollMenu () {
	if(this.posY >= (this.containerOffset + this.containerHeight - this.menuHeight)) {
		this.menu.removeClass('fixed')
			.addClass('relative')
			.css('top', (this.containerHeight - this.menuHeight - (this.menuOffset - this.containerOffset)));
	} else if (this.posY <= this.menuOffset) {
		this.menu.removeClass(['fixed', 'relative']);
	} else {
		this.menu.addClass('fixed')
			.css('top', 0);
	}
};

ContentNav.prototype.onReSize = function onReSize () {
	this.menu.css('width', this.menu.parent().width());
};

ContentNav.prototype.init = function init () {
		var this$1 = this;


	$(document).on('scroll', function () { 
		this$1.onScrollCommon();

		var menuRange = (this$1.posY - this$1.containerOffset) / this$1.containerHeight;
			
		if (menuRange > 0 && menuRange < 1) {
			this$1.onScrollMenu();
			this$1.onSetActiveId();
		} else {
			this$1.menu.removeClass(['fixed', 'relative']);
			this$1.currentPair = null;
		}
	});

	$(document).on('resize', function () {  
		this$1.onReSize();
	});

	this.onReSize();
};

/* harmony default export */ __webpack_exports__["a"] = (ContentNav);

/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),
/* 13 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map