/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../*.{php,js}","../Resources/Views/assets/**/*.{php,js}"],
  theme: {
    extend: {

      maxWidth : {

        "custom" : "1170px",
      },

      backgroundColor : {

        "gray-1" : "rgba(0, 0, 0, 0.7)",
      }

    },
  },
  plugins: [],
}

