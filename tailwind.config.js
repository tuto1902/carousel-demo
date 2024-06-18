import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  presets: [preset],
  content: [
    './resources/**/*.blade.php',
    './vendor/tuto1902/carousel/resources/**/*.blade.php',
    './vendor/tuto1902/infolist-carousel/resources/**/*.blade.php',
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

