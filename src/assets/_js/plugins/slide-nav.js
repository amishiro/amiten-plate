export default {
  data () {
    return {
      slideNav: {
        isOpen: false,
        isActive: false,
      }
    }
  },
  mounted () {
    setTimeout(() => {
      this.slideNav.isActive = true
    }, 500)
  },
}
