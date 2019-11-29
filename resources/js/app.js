
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('dashboard', require('./components/dashboard.vue').default);
Vue.component('metodos-retiro', require('./components/metodos-retiro.vue').default);
Vue.component('crear-proyecto', require('./components/crear-proyecto.vue').default);
Vue.component('mis-proyectos', require('./components/mis-proyectos.vue').default);
Vue.component('proyectos', require('./components/proyectos.vue').default);

const app = new Vue({
    el: '#app',
    data:{
        menu: 0
    }
});
