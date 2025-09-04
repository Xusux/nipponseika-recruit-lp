/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/investors/individual/**/*.php"],
  theme: {
    extend: {
      colors: {
        blue: {
          850: '#004098'
        }

      },
      screens: {
        sp: '390px',
        '3xl': '1680px'
      },
    },
  },
  plugins: [],
}

