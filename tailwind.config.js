/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: '#f87171',
        hitam: '#0f172a',
        primaryCV: '#44717f',
        secondaryCV: '#8caab4',
        tertiaryCV: '#a0b9c1',
      },
    },
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
}
