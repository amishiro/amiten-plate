// import
import './plugins/vue-scrollto.js'
import './plugins/vue-formulate.js'

import { globalSlideMenuMixin } from './layouts/global-menu.js'
import { formSampleMixin } from './pages/form.js'

import Test from './components/test.vue'

const app = new Vue({
  el: '#app',
  components: {
    Test,
  },
  mixins: [
    globalSlideMenuMixin,
    formSampleMixin
  ]
})

export default { app }
