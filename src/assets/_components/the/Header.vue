<template>
  <div class="the-header">
    <div class="the-header__wrapper">
      <h1 class="the-header__title">
        {{ title }}
      </h1>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: 'titleを指定してください'
    },
  },
}
</script>

<style lang="scss">
.the-header {
  padding: $gap-m 0;
  background-color: $color-light;
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
