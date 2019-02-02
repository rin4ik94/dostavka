export const user = (state) => {
    return state.user
}
export const userId = (state) => {
    return state.user.id
}
export const regionId = (state) => {
    return state.user.region
}
export const regionName = (state) => {
    return state.user.regionName
}
export const locale = (state) => {
    return state.user.lang
}
export const regionSlug = (state) => {
    return state.user.regionSlug
}
export const cart = (state) => {
    return state.cart
}
export const delivery_price = (state) => {
    return state.delivery_price
}
export const totalCart = (state) => state.cart.total
export const manager = (state) => {
    return state.cart.manager
}
// export const lang = (state) => {
//     return state.user.lang
// }
// export const navbar = (state) => {
//     return state.navbar
// }
// export const minOrder = (state) => {
//     return state.user.minOrder
// }
// export const maxDelivery = (state) => {
//     return state.user.maxDelivery
// }
// export const deliveryPrice = (state) => {
//     return state.user.deliveryPrice
// }
// export const total = (state) => {
//     return state.user.total
// }