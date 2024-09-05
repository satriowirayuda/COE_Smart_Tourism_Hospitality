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
        default: ["Lota Grotesque Alt 2", "sans-serif"],
      },
      colors: {
        "biru-sth": "#2593CF",
        "putih-sth": "#FFFFFF"
      }
    },
  },
  plugins: [],
}

