import Vue from 'vue'

// base
import BaseAssist from './base/Assist.vue'
import BaseButton from './base/button.vue'
import BaseButtons from './base/buttons.vue'
import BaseCard from './base/Card.vue'
import BaseColumn from './base/Column.vue'
import BaseColumns from './base/Columns.vue'
import BaseGrid from './base/Grid.vue'
import BaseHeading from './base/Heading.vue'
import BaseSubNav from './base/SubNav.vue'
import BaseWrapper from './base/Wrapper.vue'

// the
import TheBreadcrumb from './the/Breadcrumb.vue'
import TheHeader from './the/Header.vue'
import ThePageTop from './the/PageTop.vue'
import TheSlideNav from './the/SlideNav.vue'
import TheSlideNavMenu from './the/SlideNavMenu.vue'

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
