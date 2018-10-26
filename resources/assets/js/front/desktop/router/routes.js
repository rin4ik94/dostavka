
import Dashboard from '../layouts/Dashboard'
import Home from '../pages/main/Home'
import Profile from '../pages/Profile'
import Orders from '../pages/Orders'
import Delivery from '../pages/Delivery'
import Catalog from '../pages/catalog/Catalog'
import Products from '../pages/catalog/Products'
import ProductModal from '../components/modals/Product'
import Cart from '../pages/Cart'
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
            meta: {
                guest: true,
                needsAuth: false
            }
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile,
            meta: {
                guest: false,
                needsAuth: true
            }
        },
        {
            path: '/orders',
            name: 'orders',
            component: Orders,
            meta: {
                guest: false,
                needsAuth: true
            }
        },
        {
            path: '/cart',
            name: 'cart',
            component: Cart,
            meta: {
                guest: true,
                needsAuth: false
            }
        },
        {
            path: '/delivery',
            name: 'delivery',
            component: Delivery,
            meta: {
                guest: true,
                needsAuth: false
            }
        },
        {
            path: '/:city/:slug',
            name: 'catalog',
            component: Catalog,
            meta: {
                guest: true,
                needsAuth: false
            },
            children: [
                {
                    path: 'cats/:sluged',
                    name: 'category',
                    component: Products,
                    meta: {
                        guest: true,
                        needsAuth: false
                    },
                    children: [
                        {
                            path: ':product',
                            name: 'pp',
                            component: ProductModal,
                            meta: {
                                guest: true,
                                needsAuth: false
                            }
                        }
                    ]
                },
                {
                    path: ':product',
                    name: 'tp',
                    component: ProductModal,
                    meta: {
                        guest: true,
                        needsAuth: false
                    }
                }
            ]
        },
        {
            path: '*',
            name: 'notFound',
            component: NotFound,
            meta: {
                guest: true,
                needsAuth: false
            }
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