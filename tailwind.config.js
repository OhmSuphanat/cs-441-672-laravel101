import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        plugins: [function ({addUtilities}) {
            const newUtilities = {
                ".flex-col": {
                    display: 'flex',
                    flexDirection: 'column'
                },
                ".flex-row": {
                    display: 'flex',
                    flexDirection: 'row'
                },
            };
            addUtilities(newUtilities, ['responsive']);
        }]
    },

    plugins: [forms],
};
