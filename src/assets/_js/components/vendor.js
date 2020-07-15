import Vue from 'vue'

import BaseAssist from './Base/Assist.vue'
import BaseButton from './Base/button.vue'
import BaseButtons from './Base/buttons.vue'
import BaseCard from './Base/Card.vue'
import BaseColumn from './Base/Column.vue'
import BaseColumns from './Base/Columns.vue'
import BaseGrid from './Base/Grid.vue'
import BaseHeading from './Base/Heading.vue'
import BaseSubNav from './Base/SubNav.vue'
import BaseWrapper from './Base/Wrapper.vue'
import slideNav from './layouts/slide-nav.js'
import objectFitImages from './layouts/object-fit-images.js'

Vue.mixin({
  components: {
    BaseAssist,
    BaseButton,
    BaseButtons,
    BaseCard,
    BaseColumn,
    BaseColumns,
    BaseGrid,
    BaseHeading,
    BaseSubNav,
    BaseWrapper,
  },
})
Vue.mixin(slideNav)
Vue.mixin(objectFitImages)

