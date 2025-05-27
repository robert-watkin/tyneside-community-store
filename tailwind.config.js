import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand': {
                    DEFAULT: '#0c2d9c',
                    'light': '#3e59c7',
                    'dark': '#091f6d',
                },
            },
            backgroundImage: {
                'welcome-hero': "url('/images/store-front-new.jpg')",
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            }
        },
    },

    plugins: [forms, typography],
};
