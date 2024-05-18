/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        mydefault: '#F5E6CA'
      },

      dropShadow: {
        '3xl': '0 35px 35px rgba(0, 0, 0, 0.25)',
        '4xl': [
            '0 35px 35px rgba(0, 0, 0, 0.55)',
            '0 45px 65px rgba(0, 0, 0, 0.35)'
        ]
      },

      screens: {
        'widescreen': { 'raw': '(min-aspect-ratio: 3/2'},
        'tallscreen': { 'raw': '(min-aspect-ratio: 1/2'},
      }

    },
  },
  plugins: [],
}

