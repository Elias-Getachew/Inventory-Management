import "./bootstrap";
import Alpine from "alpinejs";
import $ from "jquery"; // Import jQuery

window.Alpine = Alpine;
window.$ = $; // Make jQuery available globally

Alpine.start();

window.$ = window.jQuery = require('jquery');
