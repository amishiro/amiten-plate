<template>
  <div class="base-buttons">
    <div class="base-buttons__wrapper">
      <slot />
    </div>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="scss">
@import "../../../_css/variables/variable";
@import "../../../_css/variables/mixin";

.base-buttons {
  &__wrapper {
    display: flex;
    flex-direction: column;
    margin-top: -$gap/2;
    margin-right: -$gap;
    margin-bottom: -$gap/2;
    margin-left: -$gap;
    @include tablet {
      flex-direction: row;
    }

    & > .base-button {
      width: 100%;
      padding: $gap/2 $gap;

      .base-button__link {
        height: 100%;
      }
    }
  }
}
</style>
