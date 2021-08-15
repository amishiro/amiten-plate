<template>
  <div class="base-columns">
    <div class="base-columns__wrapper">
      <slot />
    </div>
  </div>
</template>

<style lang="scss">
.base-columns {
  &__wrapper {
    display: flex;
    flex-direction: column;
    margin: -(math.div($gap-s, 2)) (-$gap-s);
    @include tablet {
      flex-direction: row;
      margin: - $gap-s;
    }
  }
}
</style>
