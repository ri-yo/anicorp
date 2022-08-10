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
      colors: {
        'brightGreen' : '#63D915',
        'brightRed' : '#f3172d',
        'brightPurple' : 'rgba(104, 85, 224, 1)'
      }
    },
  },
  plugins: [],
}
