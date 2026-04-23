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
        'unac-bg': 'var(--bg)',
        'unac-elevated': 'var(--bg-elevated)',
        'unac-accent': 'var(--accent)',
        'unac-accent2': 'var(--accent-2)',
        'unac-info': 'var(--accent-info)',
        'unac-text': 'var(--text)',
        'unac-muted': 'var(--text-muted)',
        'unac-border': 'var(--border)'
      },
      boxShadow: {
        soft: '0 10px 30px rgba(12, 23, 44, 0.12)',
        deep: '0 20px 50px rgba(12, 23, 44, 0.24)',
      },
    },
  },
  plugins: [],
}

