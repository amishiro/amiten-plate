<template lang="pug">
figure.u-figure
  .u-figure__wrapper(:class="{'is-space': isSpace}")
    slot.u-figure__img
  figcaption.u-figure__imagephoto(v-if="imagePhoto") ※imagePhoto
  figcaption.u-figure__caption(v-if="caption" v-html="caption")
</template>

<script>
export default {
  props: {
    imagePhoto: {
      type: Boolean,
      reqired: false,
      default: false
    },
    caption: {
      type: String,
      reqired: false,
      default: ''
    },
    isSpace: {
      type: Boolean,
      reqired: false,
      default: false
    }
  }
}
</script>

<style lang="scss" scoped>
.u-figure {
  position: relative;
  margin-bottom: 2vw;

  @include desktop {
    max-width: 55vw;
  }

  &__wrapper {
    background-color: $black;

    &::after {
      content: ' ';
      display: block;
      position: absolute;
      z-index: -1;
      top: 1vw;
      right: -0.7vw;
      bottom: -1vw;
      left: 0.7vw;
      background-color: $dark;
    }

    &.is-space {
      padding: $bm;
    }
  }

  img {
    width: 100%;
    max-width: 100%;
    height: auto;
    vertical-align: bottom;
  }

  &__imagephoto {
    position: absolute;
    font-size: $size-6;
    z-index: 1;
    right: $bm;
    bottom: $bm/2;
  }

  &__caption {
    position: absolute;
    right: $bm;
    bottom: $bm;
    font-size: $size-6;
    font-weight: bold;
    color: $light;
    text-align: left;
    padding-top: $bm/2;
  }
}
</style>
