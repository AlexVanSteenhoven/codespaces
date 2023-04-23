import './bootstrap';
import 'flowbite';

// import modules
import './modules/alert';

// Not every page has the dark mode switch, so we only import it if it exists
if (document.querySelector('#theme-toggle')) { import('./modules/darkModeSwitch'); }
