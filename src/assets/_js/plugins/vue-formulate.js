// node_module
import VueFormulate from '@braid/vue-formulate'
import { ja } from '@braid/vue-formulate-i18n'

Vue.use(VueFormulate, {
  plugins: [ja],
  locale: 'ja'
})
