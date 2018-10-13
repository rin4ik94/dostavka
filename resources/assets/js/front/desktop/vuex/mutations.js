import localforage from 'localforage'
import { isEmpty } from 'lodash'
// export const setToken = (state, token) => {
//     if (isEmpty(token)) {
//         localforage.removeItem('authtoken', token)
//         return
//     }
//     localforage.setItem('authtoken', token)
// }
// export const setPhone = (state, phone) => {
//     if (isEmpty(phone)) {
//         localforage.removeItem('phone', phone)
//         return
//     }
//     localforage.setItem('phone', phone)
// }
export const setRegion = (state, regionId) => {
    if (!isEmpty(regionId)) {
        state.user.region = regionId;
        return
    }
}
export const setRegionName = (state, region) => {
    if (!isEmpty(region)) {
        state.user.regionName = region;
        return
    }
}
// export const setAuthenticated = (state, trueOrFalse) => {
//     state.user.authenticated = trueOrFalse;
// }
// export const setLang = (state, lang) => {
//     state.user.lang = lang;
// }
// export const setTotal = (state, total) => {
//     state.user.total = total;
// }
// export const setUserData = (state, user) => {
//     state.user.data = user
// }  