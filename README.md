**Development is currently taking place in the Version2 branch so clone that one**

# Penrose

![Penrose theme logo](https://raw.githubusercontent.com/mckeever02/penrose/master/screenshot.png)


A do-with-it-what-you-please starter theme for Wordpress that is built upon the wonderful [Bones theme](https://github.com/eddiemachado/bones) and uses [WPGulp by Ahmad Awais](https://github.com/ahmadawais/WPGulp) for assets management.  


## What does it do?

 - WPGulp for assets and workflow management
 - Cutestrap framework for a light, flexbox based grid system
 - Wordmove for quickly pushing and pulling full websites across multiple environments
 - Bones Theme for an excellent, lightweight starting point to build your Wordpress Theme/Website


## WPGulp

Created by Ahmad Awais. [WPGulp](https://github.com/ahmadawais/WPGulp) can:

- Live reload with Browser-Sync
- Sass to CSS, autoprefixing, sourcemaps, merge media queries, and minify CSS
- Concatenates and minifies JS files within a Vendor and Custom folder into one js file each
- Compresses PNG, JPEG, GIF and SVG
- watch for changes in CSS, JS and php
- InjectCSS for faster reloading
- Run `gulp images` to optimise all of the images inside of `library/images/raw/` and move them into `library/images/`
- To build an installable zip file of your theme, use command `gulp build` and your project.zip file will be created as well as a `buildTheme` folder, where you can see what was zipped.
- Run `gulp styles` to only minify the SASS files

## The Framework

Based on [Cutestrap](https://www.cutestrap.com/) - A sassy, opinionated CSS Framework. It contains:

- Flexbox grid for layout
- Baseline grid for typography
- BEM methodology for naming conventions
- Basic styles for forms, buttons, links etc
- Various variables and mixins for speeding up workflow.

## Wordmove

[Wordmove](http://welaika.github.io/wordmove/) is Capistrano for Wordpress. You can push and pull the entire contents of a wp website, including its database, across multiple environments with one command.

- Install with `gem install wordmove`
- Move `Movefile` to your root directory and edit with your environment details
- Push to your staging env: `wordmove push -e staging -d`
- Pull from your production env: `wordmove pull -e staging -d`
- More commands here: https://github.com/welaika/wordmove/wiki/Usage-and-flags-explained

## Get up and running

 1. Clone the `Version2` Branch to wherever you please on your computer.
 2. Configure your Project Configuration variables in `gulpfile.js`
 3. `cd` into your root folder in terminal and run `npm install`. This will install all of the `node_modules` required by Gulp
 4. Once the `node_modules` have been installed, type `gulp` into your Terminal window and boom. You're up and running.

## How to's




## Dependencies

 - You need to have Node, NPM and Gulp installed globally. Start here: https://docs.npmjs.com/getting-started/installing-node
 - You need the [Wordmove](http://welaika.github.io/wordmove/) ruby gem to use Wordmove deploy. For me, this was as easy as `gem install wordmove`
