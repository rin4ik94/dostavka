import Vue from 'vue'
// import store from './store'
import routes from './routes'
import VueRouter from 'vue-router'
// import beforeEach from './beforeEach'

Vue.use(VueRouter)

const router = new VueRouter({
    linkActiveClass: "active",
    mode: 'history',
    routes,
    scrollBehavior(to, from, savedPosition) {
        //https://router.vuejs.org/guide/advanced/scroll-behavior.html
        if (to.hash) {
            return { selector: to.hash }
        } else if (savedPosition) {

            return savedPosition;
        } else {
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    resolve({ x: 0, y: 0 })
                }, 500)
            })
        }
    }

})
// router.beforeEach(beforeEach)
export default router