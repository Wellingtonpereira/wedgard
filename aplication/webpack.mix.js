let mix = require('laravel-mix');

mix.scripts(['node_modules/jquery/dist/jquery.js',
             'node_modules/bootstrap/dist/js/bootstrap.min.js',
             'node_modules/owl.carousel/dist/owl.carousel.js',
             'node_modules/scrollreveal/dist/scrollreveal.min.js',
             'node_modules/sweetalert2/dist/sweetalert2.min.js'], 'public/js/all.js');

mix.styles(['node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/animate.css/animate.min.css',
            'node_modules/hover.css/css/hover-min.css',
            'node_modules/owl.carousel/dist/assets/owl.carousel.css',
            'node_modules/sweetalert2/dist/sweetalert2.min.css'], 'public/css/all.css')

mix.js('resources/assets/js/default.js', 'public/js/default.js');

mix.sass('resources/assets/sass/style.scss', 'public/css/style.css')
    .options({
        processCssUrls: false
    });
