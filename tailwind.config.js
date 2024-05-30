/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {

            animation: {
                blob1: "blob1 10s infinite",
                blob2: "blob2 15s infinite",
                rotate1: "rotate1  6s ease-in-out infinite alternate",
                rotate2: "rotate2  8s ease-in-out infinite alternate",
                rotate3: "rotate3  7s ease-in-out infinite alternate"
            },

            keyframes: {
                blob1: {
                    "0%": {
                        transform: "scale(1)",
                    },
                    "33%": {
                        transform: "scale(1.5)",
                    },
                    "66%": {
                        transform: "scale(0.9)",
                    },
                    "100%": {
                        transform: "scale(1)",
                    }
                },

                blob2: {
                    "0%": {
                        transform: "scale(1)",
                    },
                    "50%": {
                        transform: "scale(1.7)",
                    },
                    "80%": {
                        transform: "scale(0.9)",
                    },
                    "100%": {
                        transform: "scale(1)",
                    }
                },

                rotate1: {
                    "0%": {
                        transform: "rotate(0deg)",
                    },
                    "50%": {
                        transform: "scale(45deg)",
                    },
                    "100%": {
                        transform: "scale(-45deg)",
                    },
                },

                rotate2: {
                    "0%": {
                        transform: "rotate(0deg)",
                    },
                    "70%": {
                        transform: "scale(50deg)",
                    },
                    "100%": {
                        transform: "scale(-50deg)",
                    },
                },

                rotate3: {
                    "0%": {
                        transform: "rotate(0deg)",
                    },
                    "40%": {
                        transform: "scale(45deg)",
                    },
                    "100%": {
                        transform: "scale(-45deg)",
                    },
                },

            },
            colors: {
                'custom-color-1': '#9ECDFB',
                'custom-color-2': '#5EADFF',
                'custom-color-3': '#BFDFFF',
                'bg-dashboard': '#F4F4F4',
                'gd-rectangle-1': '#62AFFE',
                'gd-rectangle-2': '#80BEFC',
                'gd-rectangle-3': '#9DCCFB',
                'font-text-logo': '#FDF9F5',
                'text-hover': '#0B1956',
                'color-shape': '#D2E8FF',
                'color-title-ds': '#0B1956',
            },
            fontFamily: {
                'montserrat': ["Montserrat"],
            },
            fontWeight: {
                'customWeight': '<weight>',
            },
            fontStyle: {
                'customStyle': 'normal',
            },
            height: {
                '11/12': '91.67%',
            }
        },
    },
    daisyui: {
        themes: ["light"],
    },
    
    plugins: [
        require("daisyui")],
        

}
