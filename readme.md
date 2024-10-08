# Wordpress with Gulp and NPM

Latest Update: 2/10/2024

Created: 23/9/2022

uses a modified [barebones](https://github.com/benchmarkstudios/barebones) template

automatically adds the [bootstrap 5](https://getbootstrap.com/docs/5.2/getting-started/introduction/) CSS and JavaScript to style.css and main.js respectively

type "[gulp](https://gulpjs.com/docs/en/getting-started/quick-start)" to process and watch for changes

look at gulpfile.js to see what's getting built

you can use [wp-env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) from the processed theme folder (wp-content/themes/new-theme) to test it out. this still works after gulp cleans out the theme folder.

it might be helpful to have a [github action](https://github.com/SamKirkland/FTP-Deploy-Action) / [bitbucket pipeline](https://bitbucket.org/atlassian/ftp-deploy/src/master/) etc. to FTP the theme folder to the server or a plugin like [wp pusher](https://wppusher.com/)

## Initial CLI setup

change project-name to your chosen project / theme name

    git clone https://github.com/mikechalmers/npm-gulp-wordpress.git [project-name]
    cd [project-name]
    git remote set-url origin https://github.com/mikechalmers/(new-repository).git
    npm i
    gulp

then, with [docker](https://docs.docker.com/get-docker/) running, in the theme folder /wp-content/themes/theme-name

    wp-env start

& go to [localhost:8888/wp-admin](http://localhost:8888/wp-admin) and switch to the new theme

## Setup instructions for wordpress theme

1. change the theme folder in gulpfile.js
2. change the theme settings in src/scss/style.scss - maybe turn it all off due to recent Bootstrap changes
3. modify backend styling in src/templates/includes/admin.scss - example styling used to confirm working

## Setup instructions for FTP Deploy

1.

## To-do

- ~~add [animate.css](https://animate.style/)~~
- ~~add css normalize and update bootstrap~~
- fix npm warnings
- homepage template that showcases all major elements for quick styling
- complete setup instructions for FTP deploy
- add FTP action
