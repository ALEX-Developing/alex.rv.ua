import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.css', 
                'resources/scss/app.scss', 
                'resources/scss/projects.scss', 
                'resources/scss/project.scss', 
                'resources/scss/team.scss', 
                'resources/scss/price.scss', 
                'resources/scss/price-page.scss', 
                'resources/scss/account.scss', 
                'resources/js/app.js', 
                'resources/js/project.js', 
                'resources/js/team.js', 
                'resources/js/price.js', 
                'resources/js/price-page.js', 
                'resources/js/account.js', 
            ],
            refresh: true,
        }),
    ],
});
