/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.{js,vue,ts}",
    "./layouts/**/*.vue",
    "./pages/**/*.vue",
    "./plugins/**/*.{js,ts}",
    "./nuxt.config.{js,ts}",
    "./app.vue",
    "./error.vue",
  ],
  theme: {
		fontFamily: {
			'ia': ['Rubik', 'sans-serif']
		},
	
		fontSize: {
			'xs'    : '11px',
			'sm'    : '13px',
			'base'  : '15px',
			'lg'    : '18px',
			'xl'    : '20px',
			'2xl'   : '22px',
			'3xl'   : '26px',
			'4xl'   : '30px',
			'5xl'   : '34px',
			'6xl'   : '38px',
			'7xl'   : '42px',
			'8xl'   : '46px',
			'9xl'   : '50px'
		},
	
		extend: {
			colors: {
				'ia'            : '#5AAFF2',
				'iah'           : '#428AD5',
				'iaf'           : '#428AD5'
			}
		}
	},
  plugins: [],
}
