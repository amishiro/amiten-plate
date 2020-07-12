import Vue from 'vue'
import Test from './the/test.vue'
import Test2 from './the/test2.vue'
import BaseButtons from './Base/buttons.vue'
import BaseButton from './Base/button.vue'
import slideNav from './layouts/slide-nav.js'
import objectFitImages from './layouts/object-fit-images.js'

Vue.component('Test', Test)
Vue.component('Test2', Test2)
Vue.component('BaseButton', BaseButton)
Vue.component('BaseButtons', BaseButtons)
Vue.mixin(slideNav)
Vue.mixin(objectFitImages)

