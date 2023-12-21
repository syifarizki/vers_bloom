/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      mt: {
        '512px': '512px',
        '1648px': '1648px',
      },
      height: {
        '560px': '35rem'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

