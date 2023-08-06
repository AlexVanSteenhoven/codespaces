import './bootstrap';
import flatpickr from "flatpickr";
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

// Styles third party dependencies
import '../../vendor/power-components/livewire-powergrid/dist/powergrid'
import '../../vendor/power-components/livewire-powergrid/dist/powergrid.css'
import '../../node_modules/flatpickr/dist/flatpickr.css'

// Setup third party window objects
window.flatpickr = flatpickr;
window.Alpine = Alpine;

// Initialize Alpine and plugins
Alpine.plugin(focus)
Alpine.start();
