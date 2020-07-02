// import
import './vue-scrollto.js'
import { globalSlideMenuMixin } from './global-menu.js'
import { formSampleMixin } from './vue-formulate.js'

const app = new Vue({
  mixins: [
    globalSlideMenuMixin,
    formSampleMixin
  ],
  el: '#app'
})

export default { app }
