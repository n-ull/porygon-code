import './bootstrap';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import Editor from '@toast-ui/editor';
import '@toast-ui/editor/dist/toastui-editor.css';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    localStorage.setItem('darkMode', JSON.stringify(true));
}

