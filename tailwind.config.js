/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php', './assets/js/**/*.js'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Manrope', 'Segoe UI', 'Helvetica Neue', 'sans-serif'],
        display: ['Fraunces', 'Georgia', 'serif'],
        hero: ['Archivo Black', 'Manrope', 'Segoe UI', 'sans-serif'],
      },
      boxShadow: {
        soft: '0 10px 30px rgba(12, 23, 44, 0.12)',
        deep: '0 20px 50px rgba(12, 23, 44, 0.24)',
      },
    },
  },
  plugins: [],
}

