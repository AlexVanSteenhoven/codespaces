/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.tsx",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('flowbite/plugin'),
        require('flowbite-typography'),
    ],
}
