import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/frontend.css',
                'resources/css/admin.css',
                'resources/js/app.js',
                'resources/js/admin/login.js',
                'resources/js/admin/admin.js',
                'resources/js/admin/course.js',

                'resources/js/frontend/course.js',
                'resources/js/frontend/frontend.js',
                'resources/js/frontend/player.js',

            ],
            refresh: true,
        }),
    ],
});
