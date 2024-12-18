const mix = require('laravel-mix');

// CSS dari AdminLTE dan plugin lainnya
mix.styles([
    'node_modules/admin-lte/dist/css/adminlte.min.css',
    'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
    'node_modules/select2/dist/css/select2.min.css',
], 'public/css/adminlte.css');

// JS dari AdminLTE dan plugin lainnya
mix.scripts([
    'node_modules/admin-lte/dist/js/adminlte.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    'node_modules/select2/dist/js/select2.full.min.js',
    'node_modules/sweetalert2/dist/sweetalert2.all.min.js',
], 'public/js/adminlte.js');
