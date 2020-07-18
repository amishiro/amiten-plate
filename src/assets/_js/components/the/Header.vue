<template>
  <div class="the-header">
    <div class="the-header__wrapper">
      <div
        v-if="sub"
        class="the-header__sub"
      >
        {{ sub }}
      </div>
      <h1 class="the-header__title">
        {{ title }}
      </h1>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    sub: {
      type: String,
      default: null
    },
    title: {
      type: String,
      default: ''
    }
  }
}
</script>

<style lang="scss" scoped>
.the-header {
  background-color: $color-light;
  padding: $gap-m 0;

  @include tablet {
    height: 130px;
    padding: 0 0;
  }

  &__wrapper {
    @include wrapper;

    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }

  &__title {
    margin: 0;
  }
}
</style>
