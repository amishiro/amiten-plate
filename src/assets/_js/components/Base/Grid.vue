<template>
  <div class="base-grid">
    <slot />
  </div>
</template>

<style lang="scss">
@import "../../../_css/variables/variable";
@import "../../../_css/variables/mixin";

.base-grid {
  display: grid;
  grid-template-rows: repeat(3, auto);
  grid-template-columns: repeat(1, 1fr);
  grid-row-gap: $gap-m;
  grid-column-gap: $gap-s;
  @include tablet {
    grid-template-rows: repeat(2, auto);
    grid-template-columns: repeat(2, 1fr);
    grid-row-gap: $gap-m;
    grid-column-gap: $gap-m;
  }
  @include desktop {
    grid-template-rows: repeat(1, auto);
    grid-template-columns: repeat(3, 1fr);
    grid-row-gap: $gap-l;
    grid-column-gap: $gap-l;
  }
}
</style>
