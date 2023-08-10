/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './footer.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    colors: {
      'main-black': '#000000',
      'bg-color': '#FFFFFF',
      'text-color': '#000000',
      'black': '#000000',
      'white': '#FFFFFF'
    },
    fontFamily: {
      sans: ['Roboto Flex', 'sans-serif'],
    },

    extend: {
      letterSpacing: {
        wider: '0.05em',
        widest: '.11em',
      },
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
