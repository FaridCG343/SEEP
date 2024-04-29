/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'custom-color-1': '#9ECDFB',
        'custom-color-2': '#5EADFF',
        'custom-color-3': '#BFDFFF'
      },
      fontFamily: {
        'montserrat': ["Montserrat", 'sans-serif'],
      },
      fontWeight:{
        'customWeight':'<weight>',
      },
      fontStyle:{
        'customStyle':'normal',
      }
    },
  },
  plugins: [],

}
