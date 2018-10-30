import { isEmpty } from 'lodash'
import localforage from 'localforage'
import { setHttpToken } from '../helpers/index'
// window.Vue = require('vue');



export const login = ({ dispatch }, { payload, context }) => {
    return axios.post('/api/login', payload).then((response) => {
        dispatch('setToken', response.data.meta.token, response.data.data.phone).then(() => {
            dispatch('fetchUser')
        })
    }).catch((error) => {
        context.errors = error.response.data.errors
    })
}

export const fetchUser = ({ commit }) => {
    return axios.get('/api/me').then((response) => {
        commit('setAuthenticated', true)
        commit('setUserData', response.data.data)
    })
}

export const checkTokenExists = ({ commit, dispatch }, token) => {
    return localforage.getItem('authtoken').then((token) => {
        if (isEmpty(token)) {
            return Promise.reject('NO_STORAGE_TOKEN');
        }


        return Promise.resolve(token)
    })
}
// export const checkPhoneExists = ({ commit, dispatch }, phone) => {
//     return localforage.getItem('phone').then((phone) => {
//         if (isEmpty(phone)) {
//             return;
//         }
//         return Promise.resolve(phone)
//     })
// }
export const clearAuth = ({ commit }, token) => {
    commit('setAuthenticated', false)
    commit('setUserData', null)
    commit('setToken', null)
    // commit('setPhone', null)
    setHttpToken(null)
}

export const setRegionId = ({ commit, dispatch }, regionId) => {
    commit('setRegion', regionId)
    localforage.setItem('region', regionId)

}
export const setCart = ({ commit, dispatch }, cart) => {
    if (cart == 'empty') {
        commit('setCart', 'empty')
        return
    }
    // commit('setRegion', regionId)
    // localforage.setItem('region', regionId)
    // console.log(cart)
    return localforage.getItem('cart').then((cart) => {
        if (!isEmpty(cart)) {
            commit('setCart', cart)
        }
    })


}

export const logout = ({ dispatch }) => {
    return axios.post('/api/logout').then((response) => {
        dispatch('clearAuth')
    })
}

export const setToken = ({ commit, dispatch }, token) => {
    if (isEmpty(token)) {
        return dispatch('checkTokenExists').then((token) => {


            setHttpToken(token)
        })
    }
    commit('setToken', token)
    setHttpToken(token)
}
// export const setPhone = ({ commit, dispatch }, phone) => {
//     if (isEmpty(phone)) {
//         return dispatch('checkPhoneExists')
//     }
//     commit('setPhone', phone)
// }
export const setTotal = ({ commit, dispatch }, total) => {
    // commit('setRegion', regionId)
    // localforage.setItem('region', regionId)    console.log(cart)

    commit('setTotal', total)



}
export const addToTotal = ({ commit, dispatch }, price) => {
    // commit('setRegion', regionId)
    // localforage.setItem('region', regionId)    console.log(cart)

    commit('addToTotal', price)



}
export const setRegionName = ({ commit, dispatch }, region) => {
    commit('setRegionName', region)
}
export const setManager = ({ commit, dispatch }, manager) => {
    if (manager == 'empty') {
        commit('setManager', null)
        return
    }
    if (!manager) {
        localforage.getItem('manager').then((manager) => {
            if (!isEmpty(manager)) {
                commit('setManager', manager)
            }
        })
        return
    }
    commit('setManager', manager)
}
export const setRegion = ({ commit, dispatch }) => {
 
  localforage.getItem('region').then((regionId) => {
        if (isEmpty(regionId)) { 
            $("#Regions").modal('show')            
            return Promise.reject('NO_REGION_CHOOSEN');
        }else{
 alert(regionId)
 
            commit('setRegion', regionId)
            return Promise.resolve(regionId)
        }
     
    })
}

export const checkLangExists = ({ commit, dispatch }) => {
    return localforage.getItem('lang').then((lang) => {
        dispatch('langChange', lang)
    })
}
export const langChange = ({ commit, dispatch }, lang) => {

    if (isEmpty(lang)) {
        localforage.setItem('lang', 'ru')
        Vue.i18n.set('ru');
        commit('setLang', 'ru')
    } else {
        axios.get(`/api/locale/${lang}`)
        commit('setLang', lang)
        localforage.setItem('lang', lang)
        Vue.i18n.set(lang);
    }
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
