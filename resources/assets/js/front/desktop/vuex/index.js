import Vue from 'vue';
import Vuex from 'vuex';
import auth from './vuex'
Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        auth: auth
    }
})