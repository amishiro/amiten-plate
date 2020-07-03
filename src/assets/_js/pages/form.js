import axios from 'axios'

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
    handleTrigger () {
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
      axios
        .post(window.location.href + '/send_mail.php',
          this.encode({
            'form-name': 'contact',
            ...this.form
          }),
          axiosConfig
        )
        .then((res) => {
          console.log('success') // eslint-disable-line no-console
          setTimeout(() => {
            window.location.href = window.location.href + '/thanks/'
          }, 1000)
        })
        .catch((err) => {
          console.error(err) // eslint-disable-line no-console
          if (process.env.NODE_ENV === 'development') {
            setTimeout(() => {
              window.location.href = window.location.href + '/thanks/'
            }, 1000)
          }
        })
    },
    replySubmit () {
      this.inputFinished = false
    }
  },
  mounted () {
  },
}
