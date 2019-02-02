import PuSelect from './PuSelect'
import PuOption from './PuOption'
import PuOptgroup from './PuOptgroup'

export default Vue => {
  Vue.component(PuSelect.name, PuSelect)
  Vue.component(PuOption.name, PuOption)
  Vue.component(PuOptgroup.name, PuOptgroup)
}
