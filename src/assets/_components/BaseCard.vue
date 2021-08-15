<template>
  <div class="base-card">
    <component
      :is="tag"
      v-bind="attrs"
      class="base-card__wrapper"
      :class="addClass"
    >
      <div v-if="$slots.image" class="base-card__image">
        <slot name="image" />
      </div>
      <div v-if="$slots.body" class="base-card__body">
        <slot name="body" />
      </div>
    </component>
  </div>
</template>

<script>
export default {
  props: {
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
    }
  },
  computed: {
    tag() {
      if (this.href != null) return 'a'
      if (this.to != null) return 'nuxt-link'
      return 'div'
    },
    attrs() {
      const attrs = []
      if (this.href != null) attrs.push({ href: this.href })
      if (this.to != null) attrs.push({ to: this.to })
      if (this.target != null) attrs.push({ target: this.target })
      if (this.type != null) attrs.push({ type: this.type })
      return attrs
    },
    addClass() {
      return {
        'is-reverse': this.type === 'reverse'
      }
    }
  }
}
</script>

<style lang="scss">
.base-card {
  &__wrapper {
    display: flex;
    flex-direction: column;
    color: black;
    text-decoration: none;
    transition: all 0.3s;

    &[href] {
      position: relative;
      z-index: 1;

      &:hover {
        background-color: $color-light;
      }
    }
    @include tablet {
      flex-direction: row;
      align-items: center;
      margin-right: -$gap-s;
      margin-left: -$gap-s;
    }

    &.is-reverse {
      @include tablet {
        flex-direction: row-reverse;
      }
    }
  }

  &__image {
    @include ie {
      min-height: 0%;
    }
    @include tablet {
      flex: 0 0 60%;
      max-width: 60%;
      padding: $gap-s;
    }
    @include desktop {
      flex: 0 0 40%;
      max-width: 40%;
    }
  }

  &__body {
    @include ie {
      overflow: hidden;
    }
    @include tablet {
      display: flex;
      flex: 1 1 auto;
      flex-direction: column;
      justify-content: center;
      padding: $gap-s;
    }
  }
}
</style>
