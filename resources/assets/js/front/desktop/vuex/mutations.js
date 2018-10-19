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
    console.log(regionId)
    state.user.region = regionId;
}
export const setRegionName = (state, region) => {
    if (!isEmpty(region)) {
        state.user.regionName = region;
        return
    }
}
export const setCart = (state, cart) => {
    let d = 0
    cart.map((v, k) => {
        d = d + v.quantity
    })

    state.cart.prods = cart;
    state.cart.quantity = d;
    return
}
export const setTotal = (state, total) => {
    state.cart.total = total;
    return
}