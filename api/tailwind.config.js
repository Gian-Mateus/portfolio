/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.php"],
  theme: {
    fontFamily: {
      'sans': 'Lexend, sans-serif'
    },
    extend: {
      backgroundImage: {
        'gradient-primary': "linear-gradient(to bottom, #000000, #150c0e, #221517, #301b1d, #3e2123, #4b2324, #582425, #652525, #732020, #801918, #8c100f, #970101);"
      },
      content:{
        'arrow-up': 'url("svgs/arrow-up.svg")',
        'arrow-down': 'url("svgs/arrow-down.svg")',
        'arrow-up-b': 'url("svgs/arrow-up-b.svg")',
        'arrow-down-b': 'url("svgs/arrow-down-b.svg")',
      },
      keyframes:{
        flipScale: {
          '0%': {
          '-webkit-transform': 'translateX(0) rotateY(0) scale(1)', 'transform': 'translateX(0) rotateY(0) scale(1)', '-webkit-transform-origin': '100% 50%', 'transform-origin': '100% 50%'
          },
          '50%': {
            '-webkit-transform': 'translateX(50%) rotateY(-90deg) scale(2)', 'transform': 'translateX(50%) rotateY(-90deg) scale(2)', '-webkit-transform-origin': '50% 50%', 'transform-origin': '50% 50%'
          },
          '100%': {
            '-webkit-transform': 'translateX(100%) rotateY(-180deg) scale(1)', 'transform': 'translateX(100%) rotateY(-180deg) scale(1)', '-webkit-transform-origin': '0% 50%', 'transform-origin': '0% 50%'
          }
        }
      },
      animation: {
        'flip-scale': 'flipScale 0.5s linear backwards'
      }
    },
  },
  plugins: [],
}

