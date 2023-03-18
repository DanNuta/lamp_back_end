import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/newItem.js",
                "resources/css/home.scss",
                "resources/js/itemCatalog.js",
                "resources/css/itemCatalog.scss",
            ],
            refresh: true,
        }),
    ],
});
