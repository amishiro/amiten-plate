import Vue from 'vue'
import Test from './the/test.vue'
import Test2 from './the/test2.vue'
import slideNav from './layouts/slide-nav.js'

Vue.component('Test', Test)
Vue.component('Test2', Test2)
Vue.mixin(slideNav)

