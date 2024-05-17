/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/index.blade.php",
    "./resources/**/login.blade.php"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#121212',
        'color-hover': '#1F1E1E',
        'red-text': '#FF0000',
        'round-red': '#8B0C0C',
        'facebook': '#3b5998',
        'twitter': '#00acee',
        'youtube': '#c4302b',
        'instagram': '#3f729b',
      }
    },
  },
  plugins: [],
}

