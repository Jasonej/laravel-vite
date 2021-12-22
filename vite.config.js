import tsconfigPaths from 'vite-tsconfig-paths';
import vue from '@vitejs/plugin-vue';

export default ({ command }) => ({
    base: command === 'serve' ? '' : '/build/',
    publicDir: 'fake_dir_so_nothing_gets_copied',
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: 'resources/scripts/main.ts',
        },
    },
    plugins: [
        tsconfigPaths(),
        vue(),
    ],
});
