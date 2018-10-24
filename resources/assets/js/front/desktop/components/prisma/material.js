import * as PuComponents from './index'
let VueMaterial = Vue => {
  Object.values(PuComponents).forEach((PuComponent) => {
    Vue.use(PuComponent)
  })
}
export default VueMaterial
