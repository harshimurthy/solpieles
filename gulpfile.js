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

/**
 * Routes:
 *
 *bowerComponents +   ----> Bower
 * ../../../node_modules ----> Node
 */
var bowerComponents = '../../../bower_components';
var nodeModules = '../../../node_modules';



elixir(function(mix){
    mix.less('../plugins/startrap-agency/less/agency.less', 'resources/assets/plugins/startrap-agency/css')
	// mix.less('../plugins/font-awesome-4.5.0/less/font-awesome.less', 'resources/assets/plugins/font-awesome-4.5.0/css')
});

elixir(function(mix) {
    mix.styles([
        '../plugins/bootstrap/css/bootstrap.css',
        '../plugins/admin-lte/dist/css/AdminLTE.css',
        '../plugins/admin-lte/dist/css/skins/_all-skins.css',
        nodeModules+'/summernote/dist/summernote.css',
        '../plugins/animate-css/animate.css',
        'my-style.css',
    ], 'public/assets/css/admin');
});



elixir(function(mix) {
    mix.styles([
        '../plugins/bootstrap/css/bootstrap.css',
        '../plugins/startrap-agency/css/agency.css',
        '../plugins/animate-css/animate.css',
        nodeModules + '/summernote/dist/summernote.css',
        'my-style.css',
    ], 'public/assets/css');
});

// JS

elixir(function(mix) {
    mix.scripts([
        nodeModules + '/jquery/dist/jquery.js',
        nodeModules + '/bootbox/bootbox.js',
        '../plugins/jquery-ui/jquery-ui.js',
        '../plugins/bootstrap/js/bootstrap.js',
        '../plugins/admin-lte/dist/js/app.js',
        nodeModules + '/summernote/dist/summernote.js',   
        'ajax_config.js',
        'destroy-confirmation.js',
        'message_hidder.js',
    ], 'public/assets/js/admin');
});

elixir(function(mix) {
    mix.scripts([
        nodeModules+'/jquery/dist/jquery.js',
        '../plugins/jquery-ui/jquery-ui.js',
        nodeModules + '/bootbox/bootbox.js',
        '../plugins/bootstrap/js/bootstrap.js',
        '../plugins/startrap-agency/js/classie.js',
        '../plugins/startrap-agency/js/cbpAnimatedHeader.js',
        '../plugins/startrap-agency/js/agency.js',
        nodeModules + '/summernote/dist/summernote.js',
        'jqBootstrapValidation.js',
        'contact_me.js',
        'message_hidder.js',
        'ajax_config.js',
        'lang.js',
        'destroy-confirmation.js',
    ], 'public/assets/js');
});

/**
 * Versioning files
 * ==============================================================================================
 */

elixir(function(mix) {
    mix.version(['assets/css/all.css', 'assets/css/admin/all.css', 'assets/js/admin/all.js', 'assets/js/all.js']);
});