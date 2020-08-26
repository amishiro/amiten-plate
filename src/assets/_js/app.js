import Vue from 'vue'
import './plugins/vendor.js'
import '../_components/vendor.js'

// eslint-disable-next-line no-unused-vars
const app = new Vue({
  el: '#app',
  data () {
    return {
      testMessage: 'これはテストメッセージです',
      testObject: {
        fruit: 'Apple',
        size: 'Large',
        color: 'Red'
      },
      testArray: [
        {
          id: 1,
          name: 'Lennart Johansson',
          city: 'Stockholm'
        },
        {
          id: 2,
          name: 'Karl Eriksson',
          city: 'London'
        },
        {
          id: 3,
          name: 'Pekka Hartikainen',
          city: 'Helsinki'
        },
        {
          id: 4,
          name: 'Mia Svensson',
          city: 'Berlin'
        }
      ]
    }
  },
})
