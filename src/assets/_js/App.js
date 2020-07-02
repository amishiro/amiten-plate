// import
import './plugins/vue-scrollto.js'
import './plugins/vue-formulate.js'

import { globalSlideMenuMixin } from './layouts/global-menu.js'
import { formSampleMixin } from './pages/form.js'

const app = new Vue({
  mixins: [
    globalSlideMenuMixin,
    formSampleMixin
  ],
  el: '#app'
})

export default { app }
