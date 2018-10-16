// import App from '../App.vue'
// import Public from '../layouts/Public'
import Dashboard from '../layouts/Dashboard'
import Home from '../pages/main/Home'
import Profile from '../pages/Profile'
import Orders from '../pages/Orders'
import Delivery from '../pages/Delivery'
import Catalog from '../pages/Catalog'
import Cart from '../pages/Cart'
// import Settings from '../pages/settings/Settings'
// import Orders from '../pages/orders/Orders'
// import Cart from '../pages/carts/Cart'
// import Contacts from '../pages/contacts/Contacts'
// import Terms from '../pages/terms/Terms'
// import Delivery from '../pages/delivery/Delivery'
// import Checkout from '../pages/checkout/Checkouts'
import NotFound from '../pages/NotFound'
// import store from '../vuex'

export default [
    {
        path: '',
        component: Dashboard,
        children: [{
            path: '/',
            name: 'home',
            component: Home,
            // meta: {
            //     guest: true,
            //     needsAuth: false
            // }
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile
        },
        {
            path: '/orders',
            name: 'orders',
            component: Orders
        },
        {
            path: '/cart',
            name: 'cart',
            component: Cart
        },
        {
            path: '/delivery',
            name: 'delivery',
            component: Delivery
        },
        {
            path: '/catalogs/:slug+',
            name: 'catalog',
            component: Catalog
        },
        {
            path: '*',
            name: 'notFound',
            component: NotFound
        }
        ],
        // {
        //     path: '/settings',
        //     name: 'settings',
        //     component: Settings,
        //     meta: {
        //         guest: false,
        //         needsAuth: true
        //     }
        // },
        // {
        //     path: '/orders',
        //     name: 'orders',
        //     component: Orders,
        //     meta: {
        //         guest: false,
        //         needsAuth: true
        //     }
        // },
        // {
        //     path: '/contacts',
        //     name: 'contacts',
        //     component: Contacts,
        //     meta: {
        //         guest: true,
        //         needsAuth: false
        //     }
        // },
        // {
        //     path: '/cart',
        //     name: 'cart',
        //     component: Cart,
        //     meta: {
        //         guest: true,
        //         needsAuth: false
        //     }
        // },
        // {
        //     path: '/terms',
        //     name: 'terms',
        //     component: Terms,
        //     meta: {
        //         guest: true,
        //         needsAuth: false
        //     }
        // },
        // {
        //     path: '/delivery',
        //     name: 'delivery',
        //     component: Delivery,
        //     meta: {
        //         guest: true,
        //         needsAuth: false
        //     }
        // },
        // {
        //     path: '/checkout',
        //     name: 'checkout',
        //     component: Checkout,
        //     meta: {
        //         guest: false,
        //         needsAuth: true
        //     }
    }
]