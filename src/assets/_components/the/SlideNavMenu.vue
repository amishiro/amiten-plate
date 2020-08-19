<template>
  <div>
    <div
      class="the-slide-nav-menu"
      @click="$root.slideNav.isOpen = !$root.slideNav.isOpen"
    >
      <div
        v-show="!$root.slideNav.isOpen"
        class="the-slide-nav-menu__item"
      >
        <i class="material-icons the-slide-nav-menu__icon">menu</i>
        <span class="the-slide-nav-menu__text">menu</span>
      </div>
      <div
        v-show="$root.slideNav.isOpen"
        class="the-slide-nav-menu__item"
      >
        <i class="material-icons the-slide-nav-menu__icon">close</i>
        <span class="the-slide-nav-menu__text">close</span>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.the-slide-nav-menu {
  &__item {
    z-index: 12;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    color: $color-dark;
    cursor: pointer;

    &:hover {
      color: $color-brand;
    }
  }

  &__icon {
    position: relative;
    top: 0;
    font-size: 34px;
    line-height: 1;
  }

  &__text {
    position: relative;
    top: -7px;
    font-size: 10px;
    line-height: 1;
  }
}

</style>
