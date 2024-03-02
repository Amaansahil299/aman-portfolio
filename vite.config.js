import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // csss
                'resources/css/app.css',
                'resources/css/signup.css',
                'resources/css/app-light.css',
                'resources/css/app-dark.css',
                'resources/css/froala_editor.pkgd.css',
                'resources/css/swiper-bundle.min.css',
                'resources/css/blog-animate.css',


                // Js
                'resources/js/app.js',
                'resources/js/carousel.js',
                'resources/js/froala_editor.pkgd.min.js',
                'resources/js/wow.min.js',
                'resources/js/swiper-bundle.min.js',
                'resources/js/blog-main.js',



            //     images
                'resources/images/logo/logo.jpeg',

            ],
            refresh: true,
        }),
    ],
});
