export default {
  plugins: {
    "postcss-import": {},
    "@tailwindcss/postcss": {
      content: ["./**/*.php", "./src/**/*.{js,ts,jsx,tsx}"]
    },
    "autoprefixer": {},
    "cssnano": process.env.NODE_ENV === "production" ? { preset: "default" } : false
  }
}
