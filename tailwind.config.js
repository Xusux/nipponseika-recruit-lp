/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/investors/individual/**/*.php"],
  theme: {
    extend: {
      colors: {
        blue: {
          750: '#005BAA',
          850: '#004098'
        }

      },
      screens: {
        sp: '390px',
        // => @media (min-width: 390px)
        s2: '412px',
        // => @media (min-width: 412px)
        xs: '576px',
        // => @media (min-width: 576px)
        sm: '640px',
        // => @media (min-width: 640px)
        md: '768px',
        // => @media (min-width: 768px)
        tb: '820px',
        // => @media (min-width: 820px)
        lg: '1024px',
        // => @media (min-width: 1024px)
        xl: '1280px',
        // => @media (min-width: 1280px)
        '2xl': '1536px',
        // => @media (min-width: 1536px)
        '3xl': '1730px',
        // => @media (min-width: 1730px)
        '4xl': '1920px',
        // => @media (min-width: 1730px)
      },
    },
  },
  plugins: [],
}

