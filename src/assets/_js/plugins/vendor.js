import Vue from 'vue'

import './vue-scrollto.js'
import './vue-scroll-lock.js'
import slideNav from './slide-nav.js'
import objectFitImages from './object-fit-images.js'

Vue.mixin(slideNav)
Vue.mixin(objectFitImages)
