<template>
  <div
    class="base-heading"
    :class="addClass"
  >
    <div class="base-heading__wrapper">
      <div
        v-if="this.$slots.sub"
        class="base-heading__sub"
      >
        <slot name="sub" />
      </div>
      <component
        :is="tag"
        class="base-heading__title"
      >
        <slot />
      </component>
      <div
        v-if="this.$slots.ex"
        class="base-heading__ex"
      >
        <slot name="ex" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    tag: {
      type: String,
      default: 'div'
    },
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
        'is-small': this.size === 'small',
        'is-medium': this.size === 'medium',
        'is-large': this.size === 'large',
        'is-center': this.position === 'center',
        'is-left': this.position === 'left',
        'is-right': this.position === 'right',
      }
    }
  },
}
</script>

<style lang="scss">
$this: '.base-heading';

#{$this}__wrapper {
  margin-top: 2em;
}

#{$this}__sub {
  width: 100%; // ie11
  margin: 0;
  color: $color-brand;
}

#{$this}__title {
  width: 100%; // ie11
  margin-top: 0;
  font-weight: normal;
  color: brack;
}

#{$this}__ex {
  width: 100%; // ie11
}

#{$this} {
  &.is-small {
    #{$this}__wrapper {
    }

    #{$this}__sub {
      color: $color-light-darken;
    }

    #{$this}__title {
      font-size: 2rem;
    }

    #{$this}__ex {
    }
  }

  &.is-medium {
    #{$this}__wrapper {
      padding: $gap-s $gap-s;
      border-left: 1px solid $color-brand;
    }

    #{$this}__sub {
      color: $color-brand;
    }

    #{$this}__title {
      margin: 0;
    }

    #{$this}__ex {
      padding: $gap-s 0;
      border-top: 1px solid $color-light-darken;
    }
  }

  &.is-large {
    #{$this}__wrapper {
    }

    #{$this}__sub {
      color: $color-dark;
    }

    #{$this}__title {
      position: relative;
      padding-bottom: $gap;
      font-size: 3.2rem;
      border-bottom: 2px solid $color-light;

      &::after {
        position: absolute;
        bottom: -1px;
        left: 0;
        display: inline-block;
        width: 3em;
        height: 1px;
        content: ' ';
        border-bottom: 1px solid $color-brand;
      }
    }

    #{$this}__ex {
    }

    &.is-center {
      #{$this}__title {
        padding-bottom: 1em;
        margin-bottom: 1em;
        border: 0;

        &::after {
          left: 50%;
          transform: translateX(-50%);
        }
      }
    }
  }

  &.is-center {
    #{$this}__wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #{$this}__sub {
    }

    #{$this}__title {
    }

    #{$this}__ex {
    }
  }

  &.is-left {
    #{$this}__wrapper {
    }

    #{$this}__sub {
    }

    #{$this}__title {
    }

    #{$this}__ex {
    }
  }

  &.is-right {
    #{$this}__wrapper {
      text-align: right;
    }

    #{$this}__sub {
    }

    #{$this}__title {
    }

    #{$this}__ex {
    }
  }
}
</style>
