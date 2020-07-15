<template>
  <div class="base-columns">
    <div class="base-columns__wrapper">
      <slot />
    </div>
  </div>
</template>

<style lang="scss">
@import "../../../_css/variables/variable";
@import "../../../_css/variables/mixin";

.base-columns {
  &__wrapper {
    display: flex;
    flex-direction: column;
    margin: -($gap-s/2) (-$gap-s);
    @include tablet {
      flex-direction: row;
      margin: - $gap-s;
    }
  }
}
</style>
