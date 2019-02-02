export default {
    delivery_price: Number(window.App.deliveryPrice),
    user: {
        authenticated: false,
        total: 0,
        id: '',
        region: '',
        regionName: '',
        regionSlug: '',
        // phone: '',
        lang: '',
        data: {

        }
    },
    cart: {
        total: null,
        quantity: null,
        region_id: null,
        manager: {},
        prods: {}
    }
}