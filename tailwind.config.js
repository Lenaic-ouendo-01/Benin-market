/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'fam1' : "Playfair Display",
        'fam2' : "Playpen Sans",
      }
    },
  },
  plugins: [],
}