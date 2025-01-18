/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#14b8a6",
        secondary: "#64748b",
        
        sot: "#E195AB",
        ini: "#0f172a",
        dark: "#3D3D3D",
      },
      gridTemplateColumns: {
        '3-max-content': 'repeat(3, max-content)',
      },
      transitionDuration: {
        '400': '400ms',
      },
      screens: {
        "2xl": "1320px",
      },
      slideInFromTop: {
        '0%': { transform: 'translateY(-100%)', opacity: '0' },
        '100%': { transform: 'translateY(0)', opacity: '1' },
      },
    },
    animation: {
      slideInFromTop: 'slideInFromTop 0.5s ease-out forwards',
    },
    backgroundImage: {
      'gradient-custom': 'linear-gradient(to right, #000000, #00B1F0, #000000)',
    
      typing: {
        '0%': { width: '0' },
        '100%': { width: '100%' },
      },
      'blink-caret': {
        '0%, 100%': { borderColor: 'transparent' },
        '50%': { borderColor: 'currentColor' },
      },
    },
    animation: {
      typing: 'typing 4s steps(24, end) infinite',
      'blink-caret': 'blink-caret 1s step-end infinite',
    },
  },
  plugins: [],
};
