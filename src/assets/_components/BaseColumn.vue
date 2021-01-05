<template>
  <div class="base-column">
    <div class="base-column__wrapper">
      <slot />
    </div>
  </div>
</template>

<style lang="scss">
.base-column {
  flex: 1 1 auto;
  width: 100%;
  max-width: 100%;
  padding: $gap-s/2 $gap-s;
  @include tablet {
    padding: $gap-s;
  }

  &__wrapper {
    height: 100%;
  }
}
</style>
