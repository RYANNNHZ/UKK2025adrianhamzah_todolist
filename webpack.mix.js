const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: 'http://127.0.0.1:8000', // Ganti sesuai URL local server kamu
        files: [
            'app/**/*.php',               // Pantau perubahan file PHP
            'resources/views/**/*.blade.php', // Pantau perubahan file Blade
            'public/js/**/*.js',          // Pantau perubahan file JS
            'public/css/**/*.css'         // Pantau perubahan file CSS
        ]
    });
