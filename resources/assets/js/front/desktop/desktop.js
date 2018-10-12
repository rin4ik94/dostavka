

window.Vue = require('vue');




import router from './router'
import store from './vuex'
import localforage from 'localforage'
require('../../bootstrap')
localforage.config({
    driver: localforage.LOCALSTORAGE,
    storeName: 'delivery'
})


Vue.filter('toCurrency', function (value) {
    if (typeof value !== "number") {
        return value;
    }
    // let val = (value / 1).toFixed(0).replace('.', ' ')
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
});
// Vue.component('PuRadio', require('./front/desktop/components/PuRadio/PuRadio.vue'))

const app = new Vue({
    store,
    el: '#desktop',
    router
})