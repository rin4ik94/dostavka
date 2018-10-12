import store from '../vuex'
import localforage from 'localforage'

const beforeEach = ((to, from, next) => {
    localforage.removeItem('intended')

    store.dispatch('auth/checkTokenExists').then(() => {
        next()
    }).catch(() => {
        if (to.meta.needsAuth) {
            next({ name: 'home' })
            return
        }

        next()
    })
})

export default beforeEach