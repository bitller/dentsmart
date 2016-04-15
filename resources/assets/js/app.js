window.$ = window.jQuery = require('jquery');
var Vue = require('vue');

// Bootstrap and sweet alert
require('bootstrap-sass');
require('sweetalert');

// Require vue and vue resource
Vue.use(require('vue-resource'));

// Enable vue debug mode
Vue.config.debug = true;

// Import components
import Register from './components/Register.vue';
import LogIn from './components/LogIn.vue';
import Interventions from './components/Interventions.vue';
import Patients from './components/Patients.vue';

new Vue({
    
    /**
     * Target element.
     */
    el: '#dent_smart',

    /**
     * Application components.
     */
    components: {
        'register': Register,
        'login': LogIn,
        'interventions': Interventions,
        'patients': Patients
    }
});

$(document).ready(function() {
    // Initialize tooltips
    $('[data-toggle="tooltip"]').tooltip();
});