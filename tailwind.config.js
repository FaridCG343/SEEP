/** @type {import('tailwindcss').Config} */

export default {
  content: [
		"./resources/**/*.blade.php",
		 "./resources/**/*.js",
		 "./resources/**/*.vue",
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],
  theme: {
    extend: {
      colors:{
        'custom-color-1': '#9ECDFB',
        'custom-color-2': '#5EADFF',
        'custom-color-3': '#BFDFFF',
        'bg-dashboard': '#F4F4F4',
        'gd-rectangle-1':'#62AFFE',
        'gd-rectangle-2':'#80BEFC',
        'gd-rectangle-3':'#9DCCFB',
        'font-text-logo':'#FDF9F5',
        'text-hover':'#0B1956'
      },
      fontFamily: {
        'montserrat': ["Montserrat", 'sans-serif'],
      },
      fontWeight:{
        'customWeight':'<weight>',
      },
      fontStyle:{
        'customStyle':'normal',
      },
      height:{
        '11/12': '91.67%',
      }
    },
  },
  plugins: [
		require("daisyui")
	],

}
