import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // PARTE AGGIUNTA PER SILENZIARE WARNING CONSOLE
    css: {
        preprocessorOptions: {
            scss: {
                api: 'modern-compiler', 
                quietDeps: true,
                silenceDeprecations: ['import', 'global-builtin', 'color-functions', 'if-function'],
            },
        },
    },
});