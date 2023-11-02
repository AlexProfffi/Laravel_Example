import { defineConfig } from 'vite';
import { glob } from 'glob';
import laravel from 'laravel-vite-plugin';


// ------------- Glob data --------------

let jsFiles = glob.sync('resources/js/**/*.js', {"ignore": 'resources/js/includes/**'});
let scssFiles = glob.sync('resources/css/**/*.scss', {"ignore": 'resources/css/includes/**'});


export default defineConfig({

    plugins: [
        laravel({
            input: [...scssFiles, ...jsFiles],
            refresh: [
                'app/**',
                'resources/views/**',
                'routes/**',
                'config/**'
            ],
        }),
    ],
    server: {
        host: 'localhost',
        port: 3000
    },
    resolve: {
        alias: {
            '@': '/resources/js',
            '/images': '/resources/images',
        }
    }
});
