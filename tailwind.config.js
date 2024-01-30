/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors:{
            landing:{
                bg: '#fffffe',
                bgSecondary: '#d8eefe',
                headline: '#094067',
                paragraph: '#5f6c7b',
                paragraph2: '#d8eefe',
                button: '#3da9fc',
                highlight: '#ef4565'
            }
        },
        fontFamily:{
            'sans': ['Poppins'],
        }
    },
  },
  plugins: [],
}

