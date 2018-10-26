import { isEmpty } from 'lodash'

export const setHttpToken = (token) => {
    if (isEmpty(token)) {
        alert('here')

        window.axios.defaults.headers.common['Authorization'] = null
    }
    window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + token
}