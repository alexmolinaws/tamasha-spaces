/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./**/*.php",
    "./**/*.html",
    "./includes/**/*.html",
    "./src/js/**/*.js",
  ],
  theme: {
    fontFamily: {
      titles: ["Scada", "sans-serif"],
      subs: ["El Messiri", "serif"],
      body: ["Mukta Vaani", "sans-serif"],
    },
    colors: {
      "main": "#32D993",
      "main-light": "#26f1a8",
      "accent": "#fe9800",
      "accent-dark": "#ed8f00",
      "lite": "#fdfdfd",
      "gray-light": "#e2edea",
      "gray-dark": "#7b8386",
      "dark": "#160c28",
    },
    extend: {},
  },
  plugins: [],
};
