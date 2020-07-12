import Vue from 'vue'
import './plugins/vendor.js'
import './components/vendor.js'

// eslint-disable-next-line no-unused-vars
const app = new Vue({
  el: '#app',
  mounted () {
    this.$nextTick(() => {
      // eslint-disable-next-line no-undef
      objectFitImages()
    })
    this.$nextTick(() => {
      // eslint-disable-next-line no-undef
      console.log('nextTick1')
    })
    this.$nextTick(() => {
      // eslint-disable-next-line no-undef
      console.log('nextTick2')
    })
  },
})
