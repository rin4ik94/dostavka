import RegionModal from './Region'
import ProductModal from './Product'
import LoginModal from './Login'
import Drawer from './Drawer'
export default Vue => {
    Vue.component('RegionModal', RegionModal)
    Vue.component('LoginModal', LoginModal)
    Vue.component('ProductModal', ProductModal)
    Vue.component('Drawer', Drawer)
}
