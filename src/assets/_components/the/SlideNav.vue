<template>
  <div>
    <nav
      class="the-slide-nav"
      :class="{'is-active': $root.slideNav.isActive}"
    >
      <transition name="the-slide-nav-background">
        <div
          v-if="$root.slideNav.isOpen"
          class="the-slide-nav__background"
          @click="$root.slideNav.isOpen = !$root.slideNav.isOpen"
        />
      </transition>
      <transition name="the-slide-nav-wrapper">
        <div
          v-if="$root.slideNav.isOpen"
          v-scroll-lock="$root.slideNav.isOpen"
          class="the-slide-nav__wrapper"
        >
          <ul class="the-slide-nav__inner">
            <li
              class="the-slide-nav__item"
              itemprop="name"
            >
              <a
                href=""
                class="the-slide-nav__link home"
                itemprop="URL"
              >Home</a>
            </li>
            <li
              class="the-slide-nav__item"
              itemprop="name"
            >
              <a
                href="element/"
                class="the-slide-nav__link element"
                itemprop="URL"
              >Element</a>
            </li>
            <li
              class="the-slide-nav__item"
              itemprop="name"
            >
              <a
                href="form/"
                class="the-slide-nav__link form"
                itemprop="URL"
              >Form</a>
            </li>
            <li
              class="the-slide-nav__item"
              itemprop="name"
            >
              <a
                href="components/"
                class="the-slide-nav__link components"
                itemprop="URL"
              >Components</a>
            </li>
            <li
              class="the-slide-nav__item"
              itemprop="name"
            >
              <a
                href="test/"
                class="the-slide-nav__link"
                itemprop="URL"
              >Test</a>
            </li>
            <li
              class="the-slide-nav__item"
              itemprop="name"
            >
              <a
                href=""
                class="the-slide-nav__link"
                itemprop="URL"
              >Home</a>
            </li>
          </ul>
          <ul class="the-slide-nav-sub">
            <li
              class="the-slide-nav-sub__item"
              itemprop="name"
            >
              <a
                href=""
                class="the-slide-nav-sub__link sub-item"
                itemprop="URL"
              >subItem</a>
            </li>
            <li
              class="the-slide-nav-sub__item"
              itemprop="name"
            >
              <a
                href=""
                class="the-slide-nav-sub__link sub-item"
                itemprop="URL"
              >subItem</a>
            </li>
            <li
              class="the-slide-nav-sub__item"
              itemprop="name"
            >
              <a
                href="https://www.google.co.jp/"
                class="the-slide-nav-sub__link company"
                itemprop="URL"
                target="_blank"
                rel="nofollow"
              >google</a>
            </li>
            <li
              class="the-slide-nav-sub__item"
              itemprop="name"
            >
              <a
                href="https://github.com/"
                class="the-slide-nav-sub__link privacy"
                itemprop="URL"
                target="_blank"
                rel="nofollow"
              >github</a>
            </li>
          </ul>
        </div>
      </transition>
    </nav>
  </div>
</template>

<style lang="scss">
.the-slide-nav {
  visibility: hidden;

  &.is-active {
    visibility: visible;
  }

  &__background {
    position: fixed;
    top: $gap-xl;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 10;
    background-color: rgba(0, 0, 0, 0.5);
  }

  &__wrapper {
    position: fixed;
    top: $gap-xl;
    right: 0;
    bottom: 0;
    z-index: 11;
    box-sizing: border-box;
    width: 280px;
    overflow-y: auto;
    background-color: $color-brand;
  }

  &__inner {
    width: 100%;
    padding: $gap;
    margin: 0;
    list-style: none;
  }

  &__item {
    box-sizing: border-box;
    height: 48px;
    margin-top: -1px;
    overflow: hidden;
    background-color: $color-light;
  }

  &__link {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    padding: 0 $gap;
    font-size: 1.4rem;
    line-height: 1;
    text-decoration: none;
    transition: all 0.3s;

    &::before {
      @include material-icons;
      content: 'arrow_right';
    }

    &:hover {
      color: white;
      background-color: $color-brand;
    }

    &.ig {
      font-feature-settings: 'palt';
    }

    &.acceptance {
      &::before {
        margin-right: $gap/2;
        margin-left: $gap/2;
        content: 'headset_mic';
      }

      body.acceptance &,
      &:hover {
        color: white;
        background-color: $color-brand;

        &::before {
          color: white;
        }
      }
    }

    &.contact {
      color: $color-point;

      &::before {
        margin-right: $gap/2;
        margin-left: $gap/2;
        content: 'mail';
      }

      body.contact &,
      &:hover {
        color: white;
        background-color: $color-point;

        &::before {
          color: white;
        }
      }
    }
    @each $class in home, column, element, components, form {
      &.#{$class} {
        body.#{$class} & {
          color: white;
          background-color: $color-brand;

          &::before {
            color: $color-point;
          }
        }
      }
    }//each
  }

  &-sub {
    padding: 0 $gap;
    margin: 0;

    &__item {
      height: 24px;
    }

    &__link {
      display: flex;
      align-items: center;
      width: 100%;
      height: 100%;
      font-size: 1.2rem;
      line-height: 1;
      color: white;
      text-decoration: none;
      transition: all 0.3s;

      &::before {
        @include material-icons;
        content: 'arrow_right';
      }

      &:hover {
        color: $color-brand-lighten;
      }

      &[target='_blank'] {
        &::after {
          @include material-icons;
          margin-left: $gap/2;
          font-size: 1.6rem;
          content: 'open_in_new';
        }
      }
      @each $class in faq, policy {
        &.#{$class} {
          body.#{$class} & {
            color: $color-point;

            &::before {
              color: $color-point;
            }
          }
        }
      }//each
    }
  }

  // transition animation
  &-background {
    &-enter-active,
    &-leave-active {
      transition: opacity 0.2s ease;
    }

    &-enter,
    &-leave-to {
      opacity: 0;
      transition: all 150ms ease-in 0s;
    }
  }

  &-wrapper {
    &-enter-active,
    &-leave-active {
      opacity: 1;
      transition: transform 0.2s ease;
    }

    &-enter,
    &-leave-to {
      transition: all 150ms ease-in 0s;
      transform: translateX(100%);
    }
  }
}

</style>
