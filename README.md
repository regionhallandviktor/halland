# Halland 🍲

Halland is a Wordpress theme based on [Sage](https://github.com/roots/sage). Halland is the starting point of websites built by Region Halland.


## Requirements

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](http://php.net/manual/en/install.php) >= 7.0
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 6.9.x
* [Yarn](https://yarnpkg.com/en/docs/install)


## Getting started

### Installation

Clone this repository into the themes folder of [your Wordpress installation](https://github.com/RegionHalland/wordpress-boilerplate) and install dependencies:
** 1. Clone this repos to your local dev environment **
```shell
$ cd [your site]/web/app/themes/
$ git clone https://github.com/RegionHalland/halland.git
$ cd halland
$ composer install && yarn
```
** Update `resources/assets/config.json` settings: **

- `devUrl` should reflect your local development hostname
- `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/halland` for non-[Bedrock](https://roots.io/bedrock/) installs)

###Using Halland as a parent theme
TBD

## Build commands

* `yarn run start` — Compile assets when file changes are made, start Browsersync session
* `yarn run build` — Compile and optimize the files in your assets directory
* `yarn run build:production` — Compile assets for production

### Theme structure

```shell
themes/halland/           # → Root
├── app/                  # → Theme PHP
│   ├── controllers/      # → Controller files
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
│   ├── functions.php     # → Composer autoloader, theme includes
│   ├── index.php         # → Never manually edit
│   ├── screenshot.png    # → Theme screenshot for WP admin
│   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
└── vendor/               # → Composer packages (never edit)
```
