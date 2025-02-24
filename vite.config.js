import { defineConfig, splitVendorChunkPlugin } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ]
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        splitVendorChunkPlugin(),
    ],
    server: {
        host: '0.0.0.0',  // Allows access from any device
        port: 5173,       // Ensure the port is open in your firewall
        strictPort: true,
        hmr: {
            host: '194.238.19.210', // Use your server's IP
        },
    },
});
