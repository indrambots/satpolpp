const mix = require('laravel-mix');
 mix.sass('resources/sass/plugins.scss', 'public/css/plugins.css');

mix.copy( 'resources/images/', 'public/images/'); // copy semua images
mix.copy( 'resources/files/', 'public/files/'); // copy semua images
mix.copy( 'resources/js/external', 'public/js/'); // copy semua images
// alphine
mix.js([
    'resources/js/default/alpinejs.js',
], 'public/js/default/alpinejs.js');
mix.js([
    'resources/js/default/axios.js',
], 'public/js/default/axios.js');

 //plugins external
 mix.js([
    'resources/js/plugins/sweetalert2.js',
], 'public/js/plugins/sweetalert2.js');

mix.js([
   'resources/js/plugins/toastr.js',
], 'public/js/plugins/toastr.js');


mix.js([
    'resources/js/default/turbolink.js',
], 'public/js/default/turbolink.js');


