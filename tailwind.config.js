/** @type {import('tailwindcss').Config} */
require('dotenv').config();
const enablePurge = process.env.ENABLE_PURGE === 'true';
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        '10': '6rem',
      },
      colors: {
        'gw-green': '#009900',
      },
    },
  },
  plugins: [],
}
