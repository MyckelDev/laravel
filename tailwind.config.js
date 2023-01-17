/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue", 
  ],
  theme: {
    extend: {},
  },
  plugins: [required('@tailwindcss/forms')],
}
