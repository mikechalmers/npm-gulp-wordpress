# Wordpress with Gulp and NPM

23/9/2022

uses a modified [barebones](https://github.com/benchmarkstudios/barebones) template

automatically adds the [bootstrap 5](https://getbootstrap.com/docs/5.2/getting-started/introduction/) CSS and JavaScript to style.css and main.js respectively

type "[gulp](https://gulpjs.com/docs/en/getting-started/quick-start)" to process and watch for changes

look at gulpfile.js to see what's getting built

you can use [wp-env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) from the processed theme folder (wp-content/themes/new-theme) to test it out

it might be helpful to have a [github action](https://github.com/SamKirkland/FTP-Deploy-Action) / [bitbucket pipeline](https://bitbucket.org/atlassian/ftp-deploy/src/master/) etc. to FTP the theme folder to the server

    git clone https://github.com/mikechalmers/npm-gulp-wordpress.git
    npm i
    gulp

## Wordpress theme

- change the theme folder in gulpfile.js
- change the theme settings in src/scss/style.scss
