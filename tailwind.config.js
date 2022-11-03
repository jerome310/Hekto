const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            screens: {
                'mobile': '500px',
                // header semantic is display: inline-block
                '700': '700px',
                // => @media (min-width: 640px) { ... }
              },
        },
    },

    plugins: [],
};
