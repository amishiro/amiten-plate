import Vue from 'vue'

import BaseButton from './Base/button.vue'
import BaseButtons from './Base/buttons.vue'
import slideNav from './layouts/slide-nav.js'
import objectFitImages from './layouts/object-fit-images.js'

Vue.mixin({
  components: {
    BaseButton,
    BaseButtons,
  },
})
Vue.mixin(slideNav)
Vue.mixin(objectFitImages)

