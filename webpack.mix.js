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
	'resources/assets/admin/resources/assets/admin/plugins/bootstrap/css/bootstrap.min.css',
	'resources/assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
	'resources/assets/admin/plugins/clockpicker/dist/jquery-clockpicker.min.css',
	'resources/assets/admin/plugins/jquery-asColorPicker-master/css/asColorPicker.css',
	'resources/assets/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css',
	'resources/assets/admin/plugins/timepicker/bootstrap-timepicker.min.css',
	'resources/assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.css',
	'resources/assets/admin/plugins/multiselect/css/multi-select.css',
	'resources/assets/admin/plugins/bootstrap-select/bootstrap-select.min.css',
	'resources/assets/admin/plugins/switchery/dist/switchery.min.css',
	'resources/assets/admin/plugins/select2/dist/css/select2.min.css',
	'resources/assets/admin/plugins/chartist-js/dist/chartist.min.css',
	'resources/assets/admin/plugins/chartist-js/dist/chartist-init.css',
	'resources/assets/admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css',
	'resources/assets/admin/plugins/css-chart/css-chart.css',
	'resources/assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css',
	'resources/assets/admin/plugins/calendar/dist/fullcalendar.css',
	'resources/assets/admin/css/style.css',
	'resources/assets/admin/css/colors/blue.css'
], 'public/css/admin.css');

mix.scripts([
	'resources/assets/admin/plugins/jquery/jquery.min.js',
	'resources/assets/admin/plugins/bootstrap/js/popper.min.js',
	'resources/assets/admin/plugins/bootstrap/js/bootstrap.min.js',
	'resources/assets/admin/js/jquery.slimscroll.js',
	'resources/assets/admin/js/waves.js',
	'resources/assets/admin/js/sidebarmenu.js',
	'resources/assets/admin/plugins/sticky-kit-master/dist/sticky-kit.min.js',
	'resources/assets/admin/plugins/sparkline/jquery.sparkline.min.js',
	'resources/assets/admin/js/custom.min.js',
	'resources/assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js',
	'resources/assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js',
	'resources/assets/admin/plugins/moment/moment.js',
	'resources/assets/admin/plugins/calendar/dist/fullcalendar.min.js',
	'resources/assets/admin/plugins/calendar/dist/jquery.fullcalendar.js',
	'resources/assets/admin/plugins/calendar/dist/cal-init.js',
	'resources/assets/admin/plugins/sparkline/jquery.sparkline.min.js',
	'resources/assets/admin/plugins/styleswitcher/jQuery.style.switcher.js',
	'resources/assets/admin/plugins/datatables/jquery.dataTables.min.js',
    'resources/assets/admin/js/dataTables.buttons.min.js',
    'resources/assets/admin/js/buttons.flash.min.js',
    'resources/assets/admin/js/jszip.min.js',
    'resources/assets/admin/js/pdfmake.min.js',
    'resources/assets/admin/js/vfs_fonts.js',
    'resources/assets/admin/js/buttons.html5.min.js',
    'resources/assets/admin/js/buttons.print.min.js',
    'resources/assets/admin/plugins/select2/dist/js/select2.full.min.js',
    'resources/assets/admin/plugins/switchery/dist/switchery.min.js',
    'resources/assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
    'resources/assets/admin/plugins/clockpicker/dist/jquery-clockpicker.min.js',
    'resources/assets/admin/plugins/bootstrap-select/bootstrap-select.min.js',
    'resources/assets/admin/plugins/multiselect/js/jquery.multi-select.js',
    'resources/assets/admin/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js',
    'resources/assets/admin/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js',
    'resources/assets/admin/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js',
    'resources/assets/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js',
    'resources/assets/admin/plugins/timepicker/bootstrap-timepicker.min.js',
    'resources/assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.js',
    'resources/assets/admin/js/scripts.js'
], 'public/js/admin.js');

mix.copy('resources/assets/admin/images', 'public/img')
