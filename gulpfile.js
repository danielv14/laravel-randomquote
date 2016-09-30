// notification or not
process.env.DISABLE_NOTIFIER = true;


const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

// use livereload
require('laravel-elixir-livereload');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .sass('admin.scss', 'public/css/admin.css')
       .webpack('app.js')
       .livereload();

});
