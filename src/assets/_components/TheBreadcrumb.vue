<template>
  <nav class="the-breadcrumb">
    <ul
      class="the-breadcrumb__wrapper"
      itemscope="itemscope"
      itemtype="http://schema.org/BreadcrumbList"
    >
      <li
        class="the-breadcrumb__item"
        itemprop="itemListElement"
        itemscope="itemscope"
        itemtype="http://schema.org/ListItem"
      >
        <a
          class="the-breadcrumb__link is-home"
          itemprop="item"
          href="/"
        >
          <i class="material-icons">home</i>
          <span itemprop="name">HOME</span>
        </a>
        <meta
          itemprop="position"
          content="1"
        >
      </li>
      <template v-for="(v, i) in breadcrumb">
        <li
          :key="i"
          class="the-breadcrumb__item"
          itemprop="itemListElement"
          itemscope="itemscope"
          itemtype="http://schema.org/ListItem"
        >
          <i class="material-icons">chevron_right</i>
          <a
            class="the-breadcrumb__link"
            itemprop="item"
            :href="v.url"
          >
            <span itemprop="name">{{ v.title }}</span>
          </a>
          <meta
            itemprop="position"
            :content="i + 2"
          >
        </li>
      </template>
    </ul>
  </nav>
</template>

<script>
export default {
  props: {
    breadcrumb: {
      type: Array,
      required: false,
      default () {
        return [{ title: 'breadcrumbを設定してください。', url: '/' }]
      }
    },
  },
}
</script>

<style lang="scss">
.the-breadcrumb {
  padding: $gap-s 0;

  &__wrapper {
    @include wrapper;
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }

  &__item {
    display: flex;
    align-items: center;
    margin-right: math.div($gap, 2);

    i {
      font-size: 1.4rem;
      line-height: 1;
    }
  }

  &__link {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    line-height: 1;
    text-decoration: none;

    &:hover {
      color: $color-brand-lighten;
    }

    &.is-home {
      span {
        display: none;
      }
    }
  }
}
</style>
