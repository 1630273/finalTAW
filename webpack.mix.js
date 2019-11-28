let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
	'resources/assets/plantilla/css/all.min.css',
	'resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
	'resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
	'resources/plugins/jqvmap/jqvmap.min.css',
	'resources/assets/plantilla/css/adminlte.min.css',
	'resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
	'resources/plugins/daterangepicker/daterangepicker.css',
	'resources/plugins/summernote/summernote-bs4.css'

], 'public/css/plantilla.css')
.scripts([
   'resources/assets/plantilla/js/jquery.min.js',
   'resources/plugins/jquery-ui/jquery-ui.min.js',
   'resources/assets/plantilla/js/bootstrap.bundle.min.js',
   'resources/plugins/chart.js/Chart.min.js',
   'resources/plugins/sparklines/sparkline.js',
   'resources/plugins/jquery-knob/jquery.knob.min.js',
   'resources/plugins/moment/moment.min.js',
   'resources/plugins/daterangepicker/daterangepicker.js',
   'resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
   'resources/plugins/summernote/summernote-bs4.min.js',
   'resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
   'resources/assets/plantilla/js/adminlte.min.js'
], 'public/js/plantilla.js')
.js(['resources/assets/js/app.js'],'public/js/app.js');
