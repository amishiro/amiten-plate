import Vue from 'vue'

// base
import BaseAssist from './BaseAssist.vue'
import BaseButton from './Basebutton.vue'
import BaseButtons from './Basebuttons.vue'
import BaseCard from './BaseCard.vue'
import BaseColumn from './BaseColumn.vue'
import BaseColumns from './BaseColumns.vue'
import BaseGrid from './BaseGrid.vue'
import BaseHeading from './BaseHeading.vue'
import BaseSubNav from './BaseSubNav.vue'
import BaseWrapper from './BaseWrapper.vue'

// the
import TheBreadcrumb from './THeBreadcrumb.vue'
import TheHeader from './THeHeader.vue'
import ThePageTop from './THePageTop.vue'
import TheSlideNav from './THeSlideNav.vue'
import TheSlideNavMenu from './THeSlideNavMenu.vue'

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
    TheBreadcrumb,
    TheHeader,
    ThePageTop,
    TheSlideNav,
    TheSlideNavMenu,
  },
})
