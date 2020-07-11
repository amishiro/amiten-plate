import Vue from 'vue'

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
  ],
  mounted () {
    console.log('test1')
  },
})

export default { app }
