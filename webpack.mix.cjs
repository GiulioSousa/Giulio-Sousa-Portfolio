const mix = require('laravel-mix');
// import mix from 'laravel-mix';

mix
    .styles([
        'resources/css/style.css',
        'resources/css/page-content.css'
    ], 
        'public/css/app.css')
    .scripts(['resources/js/header.js'], 'public/js/header.js')
    .scripts(['resources/js/typed.js'], 'public/js/typed.js')
    .version();
