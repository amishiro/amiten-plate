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
.base-buttons {
  &__wrapper {
    display: flex;
    flex-direction: column;
    margin-top: math.div(-$gap, 2);
    margin-right: -$gap;
    margin-bottom: math.div(-$gap, 2);
    margin-left: -$gap;
    @include desktop {
      flex-direction: row;
    }

    & > .base-button {
      width: 100%;
      padding: math.div($gap, 2) $gap;

      .base-button__link {
        height: 100%;
      }
    }
  }
}
</style>
