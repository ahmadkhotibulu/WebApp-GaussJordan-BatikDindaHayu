/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    './app/Views/*.php',
    './app/Views/**/*.php',
    './app/Views/**/**/*.php',
    './app/Views/**/**/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#4DA76D',
        mint: {
          '50': '#F5FAF7',
          '100': '#E7F4EB',
          '200': '#CEE8D7',
          '300': '#B2DBC1',
          '400': '#8FCBA4',
          '500': '#68B984',
          '700': '#459662',
          '800': '#3A7D52',
          '900': '#2A5B3B',
        },
      },
    },
  },
  plugins: [],
}
