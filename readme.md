# Wordpress with Gulp and NPM

23/9/2022

uses a modified [barebones](https://github.com/benchmarkstudios/barebones) template

automatically adds the bootstrap 5 CSS and JavaScript to style.css and main.js respectively

type "gulp" to process and watch for changes

look at gulpfile.js to see what's getting built

you can use [wp-env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) from the processed theme folder (wp-content/themes/new-theme) to test it out

it might be helpful to have a github action / bitbucket pipeline etc. to FTP the theme folder to the server

## Wordpress theme

- change the theme folder in gulpfile.js
- change the theme settings in src/scss/style.scss
