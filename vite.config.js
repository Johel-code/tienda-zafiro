import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import fs from 'fs'; 
 
const host = 'tienda-zafiro-production.up.railway.app'; 


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    server: { 
        host, 
        hmr: { host }, 
        https: { 
            key: fs.readFileSync(`/path/to/${host}.key`), 
            cert: fs.readFileSync(`/path/to/${host}.crt`), 
        }, 
    }, 
});
