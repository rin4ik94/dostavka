// import material from '../../material'
// import PuDialog from './PuDialog'
import PuDialogTitle from './PuDialogTitle'
import PuDialogContent from './PuDialogContent'
import PuDialogActions from './PuDialogActions'

export default Vue => {
  // material(Vue)
  // Vue.component(PuDialog.name, PuDialog)
  Vue.component(PuDialogTitle.name, PuDialogTitle)
  Vue.component(PuDialogContent.name, PuDialogContent)
  Vue.component(PuDialogActions.name, PuDialogActions)
}
