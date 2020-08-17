<template>
  <compontnt
    :is="tag"
    class="base-wrapper"
    :class="addClass"
  >
    <slot />
  </compontnt>
</template>

<script>
export default {
  props: {
    tag: {
      type: String,
      default: 'div'
    },
    position: {
      type: String,
      default: null
    },
    margin: {
      type: String,
      default: null
    },
  },
  computed: {
    addClass () {
      return {
        'is-none': this.position === 'none',
        'is-full': this.position === 'full',
        'is-left': this.position === 'left',
        'is-right': this.position === 'right',
        'is-margin-bottom-none': this.margin === 'none',
      }
    }
  },
}
</script>

<style lang="scss">
.base-wrapper {
  @include wrapper;
  @include first-child-heading;
  margin-bottom: $gap-m;

  @include tablet {
    margin-bottom: $gap-l;
  }

  @include desktop {
    margin-bottom: $gap-xl;
  }

  &.is-none {
    max-width: inherit;
    padding: 0;
    margin-right: 0;
    margin-left: 0;
  }

  &.is-full {
    width: 100vw;
    max-width: initial;
    padding: 0;
    margin-right: calc(50% - 50vw);
    margin-left: calc(50% - 50vw);
  }

  &.is-left {
    max-width: initial;
    padding: 0;
    margin-left: calc(50% - 50vw);
  }

  &.is-right {
    max-width: initial;
    padding: 0;
    margin-right: calc(50% - 50vw);
  }

  &.is-margin-bottom-none {
    margin-bottom: 0 !important;
  }
}
</style>
