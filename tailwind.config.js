/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php', './assets/js/**/*.js'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Manrope', 'Segoe UI', 'Helvetica Neue', 'sans-serif'],
        display: ['Fraunces', 'Georgia', 'serif'],
        hero: ['Archivo Black', 'Manrope', 'Segoe UI', 'sans-serif'],
      },
      colors: {
        'unac-blue': 'var(--unac-blue)',
        'unac-blue-light': 'var(--unac-blue-light)',
        'unac-blue-dark': 'var(--unac-blue-dark)',
        'unac-yellow': 'var(--unac-yellow)',
        'unac-yellow-light': 'var(--unac-yellow-light)',
        'unac-yellow-dark': 'var(--unac-yellow-dark)',
        'bg-base': 'var(--bg-base)',
        'bg-surface': 'var(--bg-surface)',
        'bg-soft': 'var(--bg-soft)',
        'text-base': 'var(--text-base)',
        'text-muted': 'var(--text-muted)',
        'border-base': 'var(--border-base)',
        'border-bright': 'var(--border-bright)',
        'unac': {
          bg: 'var(--bg-base)',
          elevated: 'var(--bg-surface)',
          soft: 'var(--bg-soft)',
          text: 'var(--text-base)',
          muted: 'var(--text-muted)',
          border: 'var(--border-base)',
          accent: 'var(--unac-yellow)',
          'accent-2': 'var(--unac-yellow-dark)',
          info: 'var(--unac-blue)',
        }
      },
      boxShadow: {
        sm: 'var(--shadow-sm)',
        md: 'var(--shadow-md)',
        lg: 'var(--shadow-lg)',
      },
    },
  },
  plugins: [],
}

