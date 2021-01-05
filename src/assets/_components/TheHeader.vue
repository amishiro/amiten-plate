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
  box-sizing: border-box;
  padding: $gap-xl 0 $gap-m;
  background-color: $color-light;
  @include tablet {
    padding: $gap-xl 0 0;
  }

  &__wrapper {
    @include wrapper;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    @include tablet {
      height: 160px;
    }
  }

  &__title {
    margin: 0;
  }
}

</style>
