<template>
  <div
    class="base-assist"
    :class="addClass"
  >
    <slot />
  </div>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: null
    },
    outline: {
      type: Boolean,
      default: false
    },
    inner: {
      type: Boolean,
      default: false
    }
  },
  computed: {
    addClass () {
      return {
        'is-point': this.type === 'point',
        'is-outline': this.type === 'outline',
        'is-info': this.type === 'info',
        'is-warning': this.type === 'warning',
      }
    }
  },
}
</script>

<style lang="scss">
.base-assist {
  @include first-child-heading;
  box-sizing: border-box;
  padding: $gap-s;
  margin-bottom: $gap;
  background-color: $color-light;

  @include tablet {
    padding: $gap-m;
    margin-bottom: $gap-s;
  }

  @include desktop {
    padding: $gap-l;
    margin-bottom: $gap-s;
  }

  &.is-inner {
    @include first-child-heading;
    box-sizing: border-box;
    padding: $gap-m;
    background-color: white;

    h1,
    h2,
    h3,
    h4,
    h5 {
      border-bottom: 1px solid $color-light !important;
    }
  }

  &.is-point {
    background-color: $color-point-lighten;

    h1,
    h2,
    h3,
    h4,
    h5 {
      border-bottom: 1px solid $color-point;
    }
  }

  &.is-outline {
    background: none;
    border: 1px solid $color-light-darken;

    h1,
    h2,
    h3,
    h4,
    h5 {
      border-bottom: 1px solid $color-light-darken;
    }
  }

  &.is-info {
    background-color: $color-info-lighten;
    border-left: 2px solid $color-info;

    h1,
    h2,
    h3,
    h4,
    h5 {
      border-bottom: 1px solid $color-info;
    }
  }

  &.is-warning {
    background-color: $color-warning-lighten;
    border-left: 2px solid $color-warning;

    h1,
    h2,
    h3,
    h4,
    h5 {
      border-bottom: 1px solid $color-warning;
    }
  }

  & + small {
    @include tablet {
      margin-top: -$gap-s;
    }
  }

  h1,
  h2,
  h3,
  h4,
  h5 {
    padding-bottom: 0.3em;
    border-bottom: 1px solid $color-light-darken;
  }
}
</style>
