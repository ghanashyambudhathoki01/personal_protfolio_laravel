import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/rich-text-editor.css',
                'resources/js/rich-text-editor.js'
            ],
            refresh: true,
        }),
    ],
});
