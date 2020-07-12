<div class="slide-nav-menu" @click="isSlideNavOpen = !isSlideNavOpen">
  <div class="slide-nav-menu__item" v-show="!isSlideNavOpen">
    <i class="material-icons slide-nav-menu__icon">menu</i>
    <span class="slide-nav-menu__text">menu</span>
  </div>
  <div class="slide-nav-menu__item" v-show="isSlideNavOpen">
    <i class="material-icons slide-nav-menu__icon">close</i>
    <span class="slide-nav-menu__text">close</span>
  </div>
</div>
