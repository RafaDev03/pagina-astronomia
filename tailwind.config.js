/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: "tw-", // ← prefijo para todas las clases Tailwind
  content: ["./**/*.php"], // escanea todos los archivos PHP
  theme: {
    extend: {},
  },
  plugins: [],
};
