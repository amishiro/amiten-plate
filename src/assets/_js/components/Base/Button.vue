<template>
  <div
    class="base-button"
    :style="styles"
  >
    <component
      :is="tag"
      class="base-button__link"
      v-bind="attrs"
      :class="[addClass]"
      @click="$emit('click', $event)"
    >
      <i class="base-button__icon material-icons">{{ iconSet }}</i>
      <span class="base-button__text">
        <slot />
      </span>
    </component>
  </div>
</template>

<script>
export default {
  props: {
    // link atters
    href: {
      type: String,
      default: null
    },
    to: {
      type: String,
      default: null
    },
    target: {
      type: String,
      default: null
    },
    type: {
      type: String,
      default: null
    },
    icon: {
      type: String,
      default: null
    },
    size: {
      type: String,
      default: null
    },
    position: {
      type: String,
      default: null
    },
    color: {
      type: String,
      default: null
    },
  },
  computed: {
    tag () {
      if (this.href != null) return 'a'
      if (this.to != null) return 'nuxt-link'
      return 'button'
    },
    attrs () {
      const attrs = []
      if (this.href != null) attrs.push({ href: this.href })
      if (this.to != null) attrs.push({ to: this.to })
      if (this.target != null) attrs.push({ target: this.target })
      if (this.type != null) attrs.push({ type: this.type })
      return attrs
    },
    iconSet () {
      if (this.icon === 'pdf') return 'picture_as_pdf'
      if (this.icon === 'exit') return 'exit_to_app'
      if (this.icon === 'reset' || this.type === 'reset') return 'cancel'
      if (this.icon != null) return this.icon
      return 'arrow_right'
    },
    styles () {
      const styles = {}
      // size
      if (this.size != null) {
        if (this.size === 'small') styles.maxWidth = '160px'
        else if (this.size === 'medium') styles.maxWidth = '320px'
        else if (this.size === 'large') styles.maxWidth = '480px'
        else styles.maxWidth = this.size
      }
      if (this.position != null) {
        if (this.position === 'left') styles.marginRight = 'auto'
        if (this.position === 'right') styles.marginLeft = 'auto'
        if (this.position === 'center') {
          styles.marginRight = 'auto'
          styles.marginLeft = 'auto'
        }
      }
      return styles
    },
    addClass () {
      return {
        'is-point': this.color === 'point',
        'is-reset': this.color === 'reset',
      }
    },
  }
}
</script>

<style lang="scss">
@import "../../../_css/variables/variable";
@import "../../../_css/variables/mixin";

// settings
$min-height: 48px;

.base-button {
  // ボタンデザイン
  &__link {
    position: relative;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: calc((#{$min-height} - 1.2em) / 2) $gap-m;
    font-weight: bold;
    line-height: 1.2;
    color: $black;
    color: white;
    text-decoration: none;
    cursor: pointer;
    background-color: $color-brand;
    border: 1px solid $color-brand;
    outline: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
    transition: all 0.2s;
    appearance: none;

    &:hover {
      color: $color-brand;
      background-color: white;
    }

    &.is-point {
      color: white;
      background-color: $color-point;
      border-color: $color-point;

      &:hover {
        color: $color-point;
        background-color: white;
      }
    }

    &.is-reset {
      color: $color-light-darken;
      background-color: white;
      border-color: $color-light-darken;
      box-shadow: none;

      &:hover {
        color: $color-dark;
        border-color: $color-dark;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
      }
    }
  }

  &__icon {
    position: absolute;
    top: 50%;
    left: $gap;
    width: 1em;
    transform: translateY(-50%);
  }

  &__text {
    text-align: left;
  }
}
</style>
