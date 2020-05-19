// node_module
import VScrollLock from 'v-scroll-lock'

// original-css
// none

// export
const menuVue = new Vue({
  el: '#app',
  data () {
    return {
      isSlideNavOpen: false
    }
  },
  mounted () {
    console.log('vue test')
  }
})

const scrollLock = Vue.use(VScrollLock, {
  reserveScrollBarGap: true,
})

export default { menuVue, scrollLock }
