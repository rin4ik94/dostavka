import localforage from 'localforage'
import { isEmpty } from 'lodash'
import { totalCart } from './getters';
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
    state.user.region = regionId;
}
export const setManager = (state, manager) => {
    state.cart.manager = manager;
}
export const setRegionName = (state, region) => {
    if (!isEmpty(region)) {
        state.user.regionName = region.name;
        state.user.regionSlug = region.slug;
        return
    }
}
export const setCart = (state, cart) => {
    if (cart == 'empty') {
        state.cart.prods = {}
        state.cart.quantity = 0
        state.cart.total = 0
        return
    }
    // let d = 0
    // cart.map((v, k) => {
    //     d = d + v.quantity
    // })

    state.cart.prods = cart;
    // state.cart.quantity = d;
    return
}
export const addToTotal = (state, price) => {
    state.cart.total = state.cart.total + price;
    localforage.setItem('totalCart', state.cart.total)
    return
}
export const setTotal = (state, total) => {
    if (total == null) {
        localforage.getItem("totalCart").then((total) => {
            if (!isEmpty('total')) {
                state.cart.total = total;

            }
        })
        return
    }
    state.cart.total = total;
    localforage.setItem('totalCart', state.cart.total)

    return
}