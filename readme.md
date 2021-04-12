# Under development

**Cellular 9.x is experimental (*although it mostly builds/is usable*). This notice will be removed when it's ready for production, and will create a separate dev branch for further feature development.**

# Cellular

### a sweet starter theme for Drupal

## Getting Started

Download or git or otherwise install the theme to `yourCoreInstall/themes`

@todo:

Install with:
composer `composer require drupal/cellular`or npm `npm install cellular`

After the project installs, the build task will run to generate the theme distribution files from `/src`.

## Building Cellular

To rebuild the theme completely from src, use the command `npm run build` (**_all changes will be overwritten to theme.info.yml, theme.breakpoints.yml, and `//dist`_**, always edit the `/src` files!\*).

To rebuild parts of the theme as changes are made, use the command `npm run watch` (**_all changes will be overwritten to theme.info.yml, theme.breakpoints.yml, and `//dist`_**, always edit the `/src` files!\*).

## npm tasks

Tasks are run from the cellular directory on the command line using `npm run {{command}}`

- `clean` removes `/dist/`
- `postcss` autoprefixes and lints css
- `mincss` minifies css in `/dist/`
- `sass` compiles `src/sass/` to `/dist/css/`
- `lint` runs all lint commands
- `lint:js` lints js
- `lint:css` lints css
- `lint:sass` lints sass
- `uglify` compiles `src/js/` to `/dist/js/app.js`
- `imagemin` optimizes `/src/assets/images/` to `dist/assets/images`
- `icons` optimizes `src/assets/icons` to `dist/assets/icons` and creates a png for a fallback image
- `build:style-dictionary` generates `theme.info.yml`, `theme.breakpoints.yml`, `src/sass/variables/_style-dictionary.scss`, and `src/js/style-dictionary.json`
- `build:css` removes existing dist css, then compiles/autoprefixes/minifies css
- `build:js` removes existing dist css, then compiles js
- `build:php`
- `build:assets` runs imagemin && icons _&& Copy to dist/assets_
- `build` removes current dist and runs all build tasks to generate theme files based on style dictionary parameters.
- `serve` runs test server
- `watch:sass` compiles css on save to `/src/sass/`
- `watch:js` compiles app.jss on save to `/src/js/`
- `watch:images` optimize icons/images on save.
- `watch` compile js & sass

### Style-dictionary

The style-dictionary is the backbone of cellular's build system. The style-dictionary is used to set/constrain variables, with sass and js actually doing the real work from settings generated by the style-dictionary.

The settings in `/src/style-dictionary/tokens` are used to constrain/organize js & sass variables.

The settings in `/src/style-dictionary/drupal` are used to simplify creating yml files (*info, breakpoint, layout, etc.*) to configure/customize your Drupal theme.

### Sass

`src/sass/style.scss` (and other top-level scss documents) import each index in order to compile optimized cascading styles.

All Sass styles are separated logically into their own partials, which are imported by that directories' `_index.scss` ().

- Style-dictionary is the ultimate source of truth for variables.

- Modularity is crucial for managing large code bases...

  - Each subset of styles is collected in that directories' `__index.sass`. Collecting styles as ordered partials allows styles to cascade properly.

  - Let the styles flow :) They're easier to manage that way.

### JS

A template is included for handling custom script with drupal/jquery, and a separate template for controlling plugins. The `/src/js/` directory will be compiled to `/dist/js/app.js`

@todo:

- script.js, plugins.js need to be configured to receive Drupal settings

- cellular-ui plugin development

### Theme functions

- Inject critical css in <head> for anonymous users (styles are presumably cached if already logged in...)
- Conditional ie (*or other*) stylesheet

@todo:

- Pass theme settings as json to js

- Play nice with layout builder

### Templates

- Templates for most common elements (_block, article, node, etc._) are provided in the `/templates` directory.

## Recommended Modules

- [Admin Toolbar]('https://www.drupal.org/project/admin_toolbar')
- [Content Lock]('https://www.drupal.org/project/')
- [Diff]('https://www.drupal.org/project/diff')
- [Field Group]('https://www.drupal.org/project/field_group')
- [Image Effects](https://www.drupal.org/project/image_effects)
- [Mail System]('https://www.drupal.org/project/mailsystem')
- [Swift Mailer]('https://www.drupal.org/project/swiftmailer')
- [Metatag]('https://www.drupal.org/project/metatag')
- [Pathauto]('https://www.drupal.org/project/pathauto')
- [Search API]('https://www.drupal.org/project/search_api')
- [Simple XML Sitemap]('https://www.drupal.org/project/simple_sitemap')
- [Security Kit]('https://www.drupal.org/project/seckit')
- [Token]('https://www.drupal.org/project/token')
- [Webform]('https://www.drupal.org/project/webform')
- [Search404]('https://www.drupal.org/project/search404')
