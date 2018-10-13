import { isEmpty } from 'lodash'
import localforage from 'localforage'
// import { setHttpToken } from '../../../helpers/index'
// // window.Vue = require('vue');

// export const register = ({ dispatch }, { payload, context }) => {
//     return axios.post('/api/client/register?its=1', payload).then((response) => {
//         let token = response.data.meta.token

//         dispatch('setToken', token).then(() => {
//             dispatch('fetchUser')
//         })
//     }).catch((error) => {
//         return Promise.reject('Something went wrong');

//         context.errors = error.response.data.errors
//     })
// }


// export const login = ({ dispatch }, { payload, context }) => {
//     return axios.post('/api/login', payload).then((response) => {
//         dispatch('setToken', response.data.meta.token, response.data.data.phone).then(() => {
//             dispatch('fetchUser')
//         })
//     }).catch((error) => {
//         context.errors = error.response.data.errors
//     })
// }

// export const fetchUser = ({ commit }) => {
//     return axios.get('/api/me').then((response) => {
//         commit('setAuthenticated', true)
//         commit('setUserData', response.data.data)
//     })
// }

// export const logout = ({ dispatch }) => {
//     return axios.post('/api/logout').then((response) => {
//         dispatch('clearAuth')
//     })
// }
export const setRegionId = ({ commit, dispatch }, regionId) => {
    commit('setRegion', regionId)
    localforage.setItem('region', regionId)

}
export const setRegion = ({ commit, dispatch }, regionId) => {
    return localforage.getItem('region').then((regionId) => {
        if (isEmpty(regionId)) {
            localforage.removeItem('region')
            return Promise.reject('NO_REGION_CHOOSEN');
        }
        commit('setRegion', regionId)
        return Promise.resolve(regionId)
    })
}
// export const setToken = ({ commit, dispatch }, token) => {
//     if (isEmpty(token)) {
//         return dispatch('checkTokenExists').then((token) => {
//             setHttpToken(token)
//         })
//     }
//     commit('setToken', token)
//     setHttpToken(token)
// }
// export const setPhone = ({ commit, dispatch }, phone) => {
//     if (isEmpty(phone)) {
//         return dispatch('checkPhoneExists')
//     }
//     commit('setPhone', phone)
// }
// export const setTotal = ({ commit }, total) => {
//     commit('setTotal', total)
// }
// export const checkLangExists = ({ commit, dispatch }) => {
//     return localforage.getItem('lang').then((lang) => {
//         dispatch('langChange', lang)
//     })
// }
// export const langChange = ({ commit, dispatch }, lang) => {
//     axios.get(`/api/locale/${lang}`)
//     commit('setLang', lang)
//     if (isEmpty(lang)) {
//         localforage.setItem('lang', 'ru')
//         Vue.i18n.set('ru');
//         commit('setLang', 'ru')

//     } else {
//         localforage.setItem('lang', lang)
//         Vue.i18n.set(lang);
//     }
// }
// export const checkTokenExists = ({ commit, dispatch }, token) => {
//     return localforage.getItem('authtoken').then((token) => {
//         if (isEmpty(token)) {
//             localforage.removeItem('phone')

//             return Promise.reject('NO_STORAGE_TOKEN');
//         }

//         return Promise.resolve(token)
//     })
// }

// export const checkPhoneExists = ({ commit, dispatch }, phone) => {
//     return localforage.getItem('phone').then((phone) => {
//         if (isEmpty(phone)) {
//             return;
//         }
//         return Promise.resolve(phone)
//     })
// }
// export const clearAuth = ({ commit }, token) => {
//     commit('setAuthenticated', false)
//     commit('setUserData', null)
//     commit('setToken', null)
//     commit('setPhone', null)
//     setHttpToken(null)
// }
