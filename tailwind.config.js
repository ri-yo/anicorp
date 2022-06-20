/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",],
  theme: {
    screens: {
      'sm': '370px',
      'md': '768px',
      'lg': '1275px',
      'xl': '1440'
    },
    extend: {
    },
  },
  plugins: [],
}
