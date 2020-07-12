// node_module
import Vue from 'vue'
import VueFormulate from '@braid/vue-formulate'
import { ja } from '@braid/vue-formulate-i18n'

Vue.use(VueFormulate, {
  plugins: [ja],
  locale: 'ja'
})
