const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.tsx",
        './app/Http/Livewire/**/*Table.php',
        './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
        './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
    ],
    theme: {
        extend: {
            colors: {
                "pg-primary": colors.gray,
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('flowbite-typography'),
    ],
    presets: [
        require("./vendor/power-components/livewire-powergrid/tailwind.config.js"),
    ]
}
