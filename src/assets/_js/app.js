import Vue from 'vue'
import './plugins/vendor.js'
import '../_components/vendor.js'

// plugin
import axios from 'axios'

// eslint-disable-next-line no-unused-vars
const app = new Vue({
  el: '#app',
  data () {
    return {
      // menuの開閉をコントロール
      menu: true,

      // 以下はテスト用のデーターです。消しても大丈夫。
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
      ],
      openData: undefined
    }
  },
  mounted () {
    axios
      .get(
        'http://opendata.city.kitamoto.saitama.jp/dataset/ba6e829f-1e64-4daf-948a-9de5b33ab0fe/resource/3dcc9337-c166-45e9-987f-a27c211f3985/download/homewwwhtdocsappappconsolecommandjsonconvertjsondata.json'
      )
      .then(res => {
        this.openData = res.data.dataset
      })
  }
})
