/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
		extend: {
			colors: {
				background: '#F5F5F5',
				primary: '#1D5D9B',
				seconday: '#75C2F6',
				// accent: '#B8621B',
				// text2: '#FBFEFB',
			},
			fontFamily: {
				maitree: ['Maitree', 'serif'],
				montserrat: ['Montserrat', 'sans-serif'],
				pacifico: ['Pacifico', 'cursive'],
				simonetta: ['Simonetta', 'cursive'],
				marck: ['Marck Script', 'cursive'],
			}
		}
	},
    plugins: [
        require('flowbite/plugin')
    ],
  }