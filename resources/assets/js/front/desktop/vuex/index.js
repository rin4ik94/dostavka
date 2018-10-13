import Vuex from 'vuex';
import Vue from 'vue';
import state from './state'
import * as mutations from './mutations'
import * as actions from './actions'
import * as getters from './getters'
Vue.use(Vuex)


export default new Vuex.Store({
    state,
    mutations,
    getters,
    actions
})