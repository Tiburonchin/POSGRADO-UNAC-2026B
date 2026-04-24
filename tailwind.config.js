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
        bg: 'var(--bg)',
        elevated: 'var(--bg-elevated)',
        soft: 'var(--bg-soft)',
        accent: 'var(--accent)',
        muted: 'var(--text-muted)',
        'footer-bg': 'var(--footer-bg)',
        'footer-border': 'var(--footer-border)',
        'footer-card': 'var(--footer-card)',
        'unac': {
          bg: 'var(--bg)',
          elevated: 'var(--bg-elevated)',
          soft: 'var(--bg-soft)',
          text: 'var(--text)',
          muted: 'var(--text-muted)',
          border: 'var(--border)',
          accent: 'var(--accent)',
          'accent-2': 'var(--accent-2)',
          info: 'var(--accent-info)',
        }
      },
      boxShadow: {
        soft: 'var(--shadow-soft)',
        deep: 'var(--shadow-deep)',
      },
    },
  },
  plugins: [],
}

