// import PuSelect from './PuSelect'
import PuField from './PuField'
import PuFile from './PuFile/PuFile'
import PuInput from './PuInput/PuInput'
import PuTextarea from './PuTextarea/PuTextarea'

export default Vue => {
  // Vue.use(PuSelect)
  Vue.component(PuField.name, PuField)
  Vue.component(PuFile.name, PuFile)
  Vue.component(PuInput.name, PuInput)
  Vue.component(PuTextarea.name, PuTextarea)
}
