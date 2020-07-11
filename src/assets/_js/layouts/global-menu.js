// node_module
import Vue from 'vue'
import VScrollLock from 'v-scroll-lock'

// original-css
// none

Vue.use(VScrollLock, {
  reserveScrollBarGap: true,
})

// export
export const globalSlideMenuMixin = {
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
  }
}
