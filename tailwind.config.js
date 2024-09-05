/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'lota-grotesque': ['"Lota Grotesque Alt 2"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

