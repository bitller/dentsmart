window.$ = window.jQuery = require('jquery');
var Vue = require('vue');

require('bootstrap-sass');

// Require vue and vue resource
Vue.use(require('vue-resource'));

// Enable vue debug mode
Vue.config.debug = true;

// Import components
import Register from './components/Register.vue';
import LogIn from './components/LogIn.vue';

new Vue({
    /**
     * Target element.
     */
    el: '#cloud_ticket',

    /**
     * Application components.
     */
    components: {
        'register': Register,
        'login': LogIn
    }
});

$(document).ready(function() {
    // Initialize tooltips
    $('[data-toggle="tooltip"]').tooltip();
});