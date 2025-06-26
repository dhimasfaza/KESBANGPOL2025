import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    // server: {
    //     host: '0.0.0.0',
    //     hmr: {
    //         host: '192.168.0.102', // IP laptop di jaringan WiFi
    //     }
    // },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
