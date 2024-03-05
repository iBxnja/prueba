import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
      outDir: 'dist',
      emptyOutDir: true, // Añade esta línea para asegurar que el directorio de salida esté vacío antes de construir
    },
    plugins: [
      laravel({
        input: [
          'resources/sass/app.scss',
          'resources/js/app.js',
        ],
        refresh: true,
      }),
    ],
  });
