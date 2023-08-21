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
    fontFamily: {
      sans: ['n27-regular-webfont', 'sans-serif'],
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
