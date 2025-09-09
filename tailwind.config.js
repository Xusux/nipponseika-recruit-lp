/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/investors/individual/**/*.php"],
  theme: {
    extend: {
      colors: {
        blue: {
          750: "#005BAA",
          850: "#004098",
        },
      },
      screens: {
        sp: "390px",
        // => @media (min-width: 390px)
        s2: "412px",
        // => @media (min-width: 412px)
        xs: "576px",
        // => @media (min-width: 576px)
        sm: "640px",
        // => @media (min-width: 640px)
        md: "768px",
        // => @media (min-width: 768px)
        tb: "820px",
        // => @media (min-width: 820px)
        lg: "1024px",
        // => @media (min-width: 1024px)
        xl: "1280px",
        // => @media (min-width: 1280px)
        "2xl": "1536px",
        // => @media (min-width: 1536px)
        "3xl": "1730px",
        // => @media (min-width: 1730px)
        "4xl": "1920px",
        // => @media (min-width: 1730px)
      },
      keyframes: {
        slowJump: {
          "0%, 100%": { transform: "translateY(0)" },
          "30%": { transform: "translateY(-20px)" },
          "50%": { transform: "translateY(-25px)" },
          "70%": { transform: "translateY(-20px)" },
        },
        smallJumpPerson: {
          "0%, 100%": { transform: "translateY(0)" },
          "50%": { transform: "translateY(-10px)" },
        },
        moveLeft: {
          "0%, 100%": { transform: "translateX(0)" },
          "50%": { transform: "translateX(-10px)" },
        },
        moveRight: {
          "0%, 100%": { transform: "translateX(0)" },
          "50%": { transform: "translateX(10px)" },
        },
        fadeIn: {
          "0%": { opacity: "0" },
          "100%": { opacity: "1" },
        },
        rotateText: {
          "0%": { transform: "rotate(0deg)" },
          "100%": { transform: "rotate(360deg)" },
        },
      },
      animation: {
        slowJump: "slowJump 2s ease-in-out infinite",
        fadeIn: "fadeIn 0.8s ease-in forwards",
        rotateText: "rotateText 10s linear infinite",
        smallJumpPerson: "smallJumpPerson 1.5s ease-in-out infinite",
        moveLeft: "moveLeft 1.5s ease-in-out infinite",
        moveRight: "moveRight 1.5s ease-in-out infinite",
      },
    },
  },
  plugins: [],
};
