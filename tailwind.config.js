/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./app/Views/User/**/*.{html,php}", "./node_modules/tw-elements/dist/js/**/*.js"],
    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: '16px',
        },
        extend: {
            colors: {
                primary: '#00bcd4',
                secondary: '#64748b',
                secondarybg: '#a7b5c9',
                dark: '#000000',
            },
            animation: {
                'fade-in-down': 'fade-in-down 1s ease-out',
                'fade-out-down': 'fade-out-down 1s ease-out',
                'fade-in-up': 'fade-in-up 1s ease-out',
                'fade-out-up': 'fade-out-up 1s ease-out'
            },
            keyframes: {
                'fade-in-down': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)'
                    },
                },
                'fade-out-down': {
                    'from': {
                        opacity: '1',
                        transform: 'translateY(0px)'
                    },
                    'to': {
                        opacity: '0',
                        transform: 'translateY(10px)'
                    },
                },
                'fade-in-up': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)'
                    },
                },
                'fade-out-up': {
                    'from': {
                        opacity: '1',
                        transform: 'translateY(0px)'
                    },
                    'to': {
                        opacity: '0',
                        transform: 'translateY(10px)'
                    },
                }
            },
            screens: {
                '2xl': '1320px',
                '3xl': '1600px',
            },
        },
    },
    plugins: [
        require('tw-elements/dist/plugin')
    ],
}
