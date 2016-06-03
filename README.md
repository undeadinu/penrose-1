# penrose
My custom Wordpress theme built upon Bones and using Gulp for asset management. It uses ahmadawa's Advanced Gulp Workflow for Wordpress and is built on top of the Bones starter theme

Dependencies and Getting Started
--------

1. `npm install`

2. Set your project configuration in gulpfile.js!! Be sure to go into gulpfile.js and setup the project configuration variables. This is important for using Browser-Sync with your project. Make sure in gulpfile.js that you set the project variable to the appropriate name for your project URL. Default is "dev.penrose"

3. Install Bower - In the command prompt/terminal run this command: `npm install -g bower`. This installs Bower (the -g flag installs globally, not just in the current directory, super friends). Your only need to do this step once.

4. Run `gulp` command in the root folder of your theme and it will start generating CSS from Sass and everything else

5. Run `gulp images` to optimize images and only place the images in `assets/img/raw/` folder, they'll moved to `assets/img/` once optimized

6. To build an installable zip file of your theme, use command `gulp build` and your project.zip file will be created as well as a `buildTheme` folder, where you can see what was zipped.

More info: https://github.com/ahmadawais/Advanced-Gulp-WordPress
