// node_module
import VueFormulate from '@braid/vue-formulate'
import { ja } from '@braid/vue-formulate-i18n'
// original-css
// none

Vue.use(VueFormulate, {
  plugins: [ja],
  locale: 'ja'
})

// export
export const formSampleMixin = {
  data () {
    return {
      inputFinished: false,
      sending: false,
      form: {
        name: '',
        nameKana: '',
        postalCode: '',
        addressLevel: '',
        addressLine: '',
        tel: '',
        mail: '',
        kind: '',
        contents: '',
        policy: ''
      }
    }
  },
  methods: {
    handleTriger () {
      // vue-formurateをコンポーネントから動作させるためのダミーのTriger
    },
    handleCheck () {
      this.inputFinished = true
    },
    handleReset (data) {
      for (const key in this.form) {
        this.form[key] = ''
      }
      this.$formulate.resetValidation('contact')
      this.inputFinished = false
    },
    encode (data) {
      return Object.keys(data)
        .map(
          key => `${encodeURIComponent(key)}=${encodeURIComponent(data[key])}`
        )
        .join('&')
    },
    handleSubmit () {
      this.sending = true
      const axiosConfig = {
        header: { 'Content-Type': 'application/x-www-form-urlencoded' }
      }
      this.$axios
        .post(
          '/',
          this.encode({
            'form-name': 'contact',
            ...this.form
          }),
          axiosConfig
        )
        .then((res) => {
          setTimeout(() => {
            this.$router.push(this.localePath('/contact/thanks'))
          }, 1000)
        })
        .catch((err) => {
          console.error(err) // eslint-disable-line no-console
          if (process.env.NODE_ENV === 'development') {
            setTimeout(() => {
              this.$router.push(this.localePath('/contact/thanks'))
            }, 1000)
          }
        })
    },
    replySubmit () {
      this.inputFinished = false
    }
  },
}
