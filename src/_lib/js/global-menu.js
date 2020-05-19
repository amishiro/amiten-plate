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
  }
})

const scrollLock = Vue.use(VScrollLock, {
  reserveScrollBarGap: true,
})

export default { menuVue, scrollLock }
