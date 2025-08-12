/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./storage/framework/views/*.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            animation:{
                float:'float 2s ease-in-out infinite',
            },
            keyframes:{
                float:{
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-20px)' },
                }
            },
            screens:{
                'verysm': '500px',
                'sm': '640px',
                'md': '769px',
                'lg': '1025px',
                'xl': '1280px',
                '2xl': '1536px'
            }
        }
    },
    plugins: [],
}
