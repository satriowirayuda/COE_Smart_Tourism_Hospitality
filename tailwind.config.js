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
        default: ["Lota Grotesque Alt 2"],
        "paragraf-sth" : "Lota Grotesque Alt 1"
      },
      colors: {
        "background": "#EEEEEE",
        "biru-sth": "#2593CF",
        "putih-sth": "#FFFFFF"
      },
      fontSize: {
        "size-24": "text-xl"
      }
    },
  },
  plugins: [],
}

