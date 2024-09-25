import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    css: {
        preprocessorOptions: {
            scss: {
                silenceDeprecations: ["legacy-js-api"],
              },
        }
      },
    plugins: [
        vue(),
        laravel({
            input: [
                'public/bvi/js/bvi.js',
                'public/bvi/css/bvi.min.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'public/scss/main.scss'
            ],
            refresh: true,
        }),
    ],
});
