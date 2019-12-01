
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
Vue.component('crear-proyecto', require('./components/proyectos/crear-proyecto.vue').default);
Vue.component('mis-proyectos', require('./components/proyectos/mis-proyectos.vue').default);
Vue.component('proyectos', require('./components/proyectos/proyectos.vue').default);
Vue.component('usuarios', require('./components/usuarios.vue').default);
Vue.component('servicios', require('./components/servicios.vue').default);
Vue.component('actividades', require('./components/proyectos/actividades.vue').default);
Vue.component('tareas', require('./components/proyectos/tareas.vue').default);
Vue.component('problemas', require('./components/proyectos/problemas.vue').default);
Vue.component('anidado', require('./components/anidado.vue').default);
Vue.component('usuarios-proyectos', require('./components/proyectos/usuarios-proyectos.vue').default);


const app = new Vue({
    el: '#app',
    data:{
        menu: 0
    }
});
