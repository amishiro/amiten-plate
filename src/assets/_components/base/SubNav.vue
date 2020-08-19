<template>
  <nav
    class="base-sub-nav"
    :class="addClass"
  >
    <div class="base-sub-nav__wrapper">
      <slot />
    </div>
  </nav>
</template>

<script>
export default {
  props: {
    size: {
      type: String,
      default: null
    },
    position: {
      type: String,
      default: null
    },
  },
  computed: {
    addClass () {
      return {
        'is-bottom': this.position === 'bottom'
      }
    }
  },
}
</script>

<style lang="scss">
$sub-nav-height: 48px;

$this: '.base-sub-nav';

#{$this} {
  #{$this}__wrapper {
    margin-bottom: 3rem;
    border-bottom: 1px solid $color-light-darken;
  }

  ul {
    display: flex;
    @include wrapper;

    @include mobile {
      flex-direction: column;
      padding: $gap;
    }
  }

  li {
    box-sizing: border-box;
    width: 100%;
    list-style: none;
    @include mobile {
      background: white;
    }
    @include tablet {
      padding: 0 $gap;
    }
  }

  a {
    position: relative;
    bottom: -1px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: $sub-nav-height;
    color: black;
    text-decoration: none;
    background: $color-light;
    border: 1px solid transparent;
    border-bottom: 1px solid $color-light-darken;
    @include mobile {
      border: 1px solid $color-light-darken;
    }

    &:hover {
      color: $color-brand;
      background: transparent;
      border: 1px solid $color-light-darken;
    }

    &.is-active {
      background: transparent;
      border: 1px solid $color-light-darken;
      border-bottom: 1px solid white;
    }
  }

  &.is-bottom {
    #{$this}__wrapper {
      margin-top: 3rem;
      border-top: 1px solid $color-light-darken;
      border-bottom: 0;
    }

    a {
      bottom: 1px;
      border-top: 1px solid $color-light-darken;
      border-bottom: 0;
      @include mobile {
        margin-top: -1px;
        border: 1px solid $color-light-darken;
      }

      &:hover {
        color: $color-brand;
        background: transparent;
        border: 1px solid $color-light-darken;
      }

      &.is-active {
        background: transparent;
        border: 1px solid $color-light-darken;
        border-top: 1px solid white;
        @include mobile {
          border: 1px solid $color-light-darken;
        }
      }
    }
  }
}

</style>
