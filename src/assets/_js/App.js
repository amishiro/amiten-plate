// import
import './plugins/vue-scrollto.js'
import './plugins/vue-formulate.js'

import { globalSlideMenuMixin } from './layouts/global-menu.js'
import { formSampleMixin } from './pages/form.js'

import Test from './components/test.vue'

const app = new Vue({
  mixins: [
    globalSlideMenuMixin,
    formSampleMixin
  ],
  components: {
    Test,
  },
  el: '#app'
})

export default { app }
