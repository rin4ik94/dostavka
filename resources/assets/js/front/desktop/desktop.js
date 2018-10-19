window.Vue = require('vue');
import router from './router'
import store from './vuex'
var SubCategories = require('./pages/catalog/SubCategories.vue');
import localforage from 'localforage'
// require('../../bootstrap')
import * as Modals from './components/modals/index'
Object.values(Modals).forEach((Modal) => {
    Vue.use(Modal)
})
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

localforage.config({
    driver: localforage.LOCALSTORAGE,
    storeName: 'delivery'
})
Vue.filter('toCurrency', function (value) {
    if (typeof value !== "number") {
        return value;
    }
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
});
store.dispatch('setRegion').catch(() => {
    $("#Regions").modal('show')
});

store.dispatch("setCart");

Vue.component('SubCategories', Vue.extend(SubCategories));
// Vue.component('PuRadio', require('./front/desktop/components/PuRadio/PuRadio.vue')) 

const app = new Vue({
    store,
    el: '#desktop',
    router
})