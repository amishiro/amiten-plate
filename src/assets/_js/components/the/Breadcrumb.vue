<template>
  <nav class="breadcrumb">
    <ul
      class="breadcrumb__wrapper"
      itemscope="itemscope"
      itemtype="http://schema.org/BreadcrumbList"
    >
      <li
        class="breadcrumb__item home"
        itemprop="itemListElement"
        itemscope="itemscope"
        itemtype="http://schema.org/ListItem"
      >
        <nuxt-link
          class="breadcrumb__link"
          itemprop="item"
          :to="localePath('/')"
        >
          <i class="material-icons">home</i>
          <span itemprop="name">{{ $t("ホーム") }}</span>
        </nuxt-link>
        <meta
          itemprop="position"
          content="1"
        >
      </li>
      <li
        v-for="(v, i) in breadcrumb"
        :key="i"
        class="breadcrumb__item"
        itemprop="itemListElement"
        itemscope="itemscope"
        itemtype="http://schema.org/ListItem"
      >
        <i class="material-icons">chevron_right</i>
        <nuxt-link
          class="breadcrumb__link"
          itemprop="item"
          :to="v.url"
        >
          <span itemprop="name">{{ v.title }}</span>
        </nuxt-link>
        <meta
          itemprop="position"
          :content="i + 2"
        >
      </li>
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
        return [{ title: this.$t('breadcrumbを設定してください。'), url: '/' }]
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.breadcrumb {
  padding: $gap-s 0;

  &__wrapper {
    @include wrapper;

    display: flex;
    align-items: center;
  }

  &__item {
    display: flex;
    align-items: center;
    margin-right: $gap/2;

    i {
      font-size: 1.4rem;
      line-height: 1;
    }
  }

  &__link {
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 1.2rem;
    line-height: 1;

    &:hover {
      color: $color-brand-lighten;
    }

    &.is-home {
      span {
        display: none;
      }
    }//home
  }
}

</style>
