window.Vue = require('vue');
import router from './router'
import store from './vuex' 
import Vuex from 'vuex';
import vuexI18n from 'vuex-i18n';
import Locales from '../../vue-i18n-locales.generated.js';
import localforage from 'localforage'
// require('../../bootstrap')
import * as Modals from './components/modals/index'
import PrismaVue from './components/prisma/material'
// import vuelidate from 'vuelidate'

// Vue.use(vuelidate)
Vue.use(PrismaVue)
const config = {
    moduleName: 'lang',
    translateFilterName: 't'
}
// set the start locale to use
Vue.use(vuexI18n.plugin, store, config);

Vue.i18n.add('ru', Locales.ru);
Vue.i18n.add('uz', Locales.uz);
Vue.i18n.fallback('ru')

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


store.dispatch('checkLangExists')

store.dispatch('setManager').then(() => {
    store.dispatch("setCart");
    store.dispatch('setTotal')
})
store.dispatch('setToken').then(() => {
    store.dispatch('fetchUser').catch(() => {
        store.dispatch('clearAuth')
        router.replace({ name: 'home' })
    }).catch(() => {
        store.dispatch('clearAuth')
        store.dispatch('showNavbar')
    })

}); 

// Vue.component('PuRadio', require('./front/desktop/components/PuRadio/PuRadio.vue')) 

const app = new Vue({
    store,
    el: '#desktop',
    router
})