const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            animation:{
                fadeIn: "fadeIn",
                fadeOut: "fadeOut",
                scaleIn: "scaleIn",
                scaleOut: "scaleOut",
            },
            keysframes:{
                fadeIn:{
                    "0%":{opacity: 0},
                    "100%":{opacity: 1},
                },
                fadeOut:{
                    "0%":{opacity: 1},
                    "100%":{opacity: 0},
                },
                scaleIn:{
                    "0%":{transform: "scale(0)"},
                    "100%":{transform: "scale(1)"},
                },
                sacleOut:{
                    "0%":{transform: "scale(1)"},
                    "100%":{transform: "scale(0)"},
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
