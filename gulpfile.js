var elixir = require('laravel-elixir');

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
// Move Bootstrap
// elixir(function(mix) {
//     mix.copy('resources/assets/plugins/bootstrap/dist/css/bootstrap.css', 
//     	'resources/assets/css/bootstrap.css');
// });

// elixir(function(mix) {
//     mix.copy('resources/assets/plugins/admin-lte/dist/css/AdminLTE.min.css', 
//     	'resources/assets/css/admin-lte.css');
// });

// elixir(function(mix) {
//     mix.copy('resources/assets/plugins/admin-lte/dist/css/skins/_all-skins.min.css', 
//     	'resources/assets/css/_all-skins.css');
// });


// elixir(function(mix) {
//     mix.copy('resources/assets/plugins/startrap-agency/less/agency.css', 
//     	'resources/assets/css');
// });
// 
elixir(function(mix){
	mix.less('agency.less', 'resources/assets/css')
});

elixir(function(mix) {
    mix.styles([
        'bootstrap.css',
        'admin-lte.css',
        '_all-skins.css',
        'my-style.css',
        'animate.css',
        'toastr.css'
    ], 'public/assets/css/admin');
});



elixir(function(mix) {
    mix.styles([
        'bootstrap.css',
        'agency.css',
        'my-style.css',
        'animate.css',
        'toastr.css'
    ], 'public/assets/css');
});

// JS

elixir(function(mix) {
    mix.scripts([
        'jquery.js',
        'jquery-ui.js',
        'bootstrap.js',
        'ajax_config.js',
        'app.js',
        'message_hidder.js',
        'destroy-confirmation.js',
        'toastr.js'
        // 'bootbox.js',
    ], 'public/assets/js/admin');
});

elixir(function(mix) {
    mix.scripts([
        'jquery.js',
        'jquery-ui.js',
        'bootstrap.js',
        'ajax_config.js',
        'classie.js',
        'cbpAnimatedHeader.js',
        'jqBootstrapValidation.js',
        'contact_me.js',
        'agency.js',
        'bootbox.js',
        'message_hidder.js',
        'destroy-confirmation.js',
        'toastr.js'
    ], 'public/assets/js');
});