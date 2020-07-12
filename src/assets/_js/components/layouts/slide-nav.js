export default {
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
}
