import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        container: {
            center: true,
        },
        extend: {
            colors: {
                'black-100': '#1a1a1a',
                'black-200': '#222222',
                'black-300': '#282828',
                'black-400': '#2f2e2e',
                'yell': '#fffd00',
            },
            minHeight: {
                '285': '285px',
            },
            maxHeight: {
                '41': '41vw'
            },
            width: {
                '63': '63%'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
