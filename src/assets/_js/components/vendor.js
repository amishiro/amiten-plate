import Vue from 'vue'

import BaseAssist from './Base/Assist.vue'
import BaseButton from './Base/button.vue'
import BaseButtons from './Base/buttons.vue'
import BaseHeading from './Base/Heading.vue'
import BaseSubNav from './Base/SubNav.vue'
import slideNav from './layouts/slide-nav.js'
import objectFitImages from './layouts/object-fit-images.js'

Vue.mixin({
  components: {
    BaseAssist,
    BaseButton,
    BaseButtons,
    BaseHeading,
    BaseSubNav,
  },
})
Vue.mixin(slideNav)
Vue.mixin(objectFitImages)

