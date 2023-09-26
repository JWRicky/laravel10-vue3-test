import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

//viteのvueプラグインの追加
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        //プラグインとしてvue()を追加
        vue(),  
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js'
            ],
            refresh: true,
        }), 
    ],
});
