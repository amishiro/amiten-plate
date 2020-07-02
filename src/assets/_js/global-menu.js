// node_module
import VScrollLock from 'v-scroll-lock'

// original-css
// none

// export
const menuVue = new Vue({
  el: '#app',
  data () {
    return {
      isSlideNavOpen: false,
      isSlideNavActive: false
    }
  },
  mounted () {
    setTimeout(() => {
      this.isSlideNavActive = true
    }, 500)
  },
})

const scrollLock = Vue.use(VScrollLock, {
  reserveScrollBarGap: true,
})

export default { menuVue, scrollLock }
