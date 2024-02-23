let mix = require('laravel-mix');

mix.disableSuccessNotifications();

mix.js('resources/js/app.js', 'public/assets/js/app.js')
.css('resources/css/app.css', 'public/assets/css/app.css')
.copyDirectory('resources/img', 'public/assets/img');

if (mix.inProduction()) {
    mix.version();
}
