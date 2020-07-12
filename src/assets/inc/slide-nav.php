<nav class="slide-nav" :class="{'is-active': isSlideNavActive}">
  <transition name="slide-nav-background">
    <div class="slide-nav__background" v-if="isSlideNavOpen" @click="isSlideNavOpen = !isSlideNavOpen"></div>
  </transition>
  <transition name="slide-nav-wrapper">
    <div class="slide-nav__wrapper" v-if="isSlideNavOpen" v-scroll-lock="isSlideNavOpen">
      <ul class="slide-nav__inner">
        <li class="slide-nav__item" itemprop="name">
          <a href="<?php echo $url; ?>" class="slide-nav__link home" itemprop="URL">Home</a>
        </li>
        <li class="slide-nav__item" itemprop="name">
          <a href="<?php echo $url; ?>/element" class="slide-nav__link element" itemprop="URL">Element</a>
        </li>
        <li class="slide-nav__item" itemprop="name">
          <a href="<?php echo $url; ?>/form" class="slide-nav__link form" itemprop="URL">Form</a>
        </li>
        <li class="slide-nav__item" itemprop="name">
          <a href="<?php echo $url; ?>/ui" class="slide-nav__link ui" itemprop="URL">UI</a>
        </li>
        <li class="slide-nav__item" itemprop="name">
          <a href="<?php echo $url; ?>/column" class="slide-nav__link column" itemprop="URL">Column</a>
        </li>
        <li class="slide-nav__item" itemprop="name">
          <a href="<?php echo $url; ?>" class="slide-nav__link" itemprop="URL">Home</a>
        </li>
        <li class="slide-nav__item" itemprop="name">
          <a href="<?php echo $url; ?>" class="slide-nav__link" itemprop="URL">Home</a>
      </ul>
      <ul class="slide-nav-sub">
        <li class="slide-nav-sub__item" itemprop="name">
          <a href="<?php echo $url ?>/" class="slide-nav-sub__link sub-item" itemprop="URL">subItem</a>
        </li>
        <li class="slide-nav-sub__item" itemprop="name">
          <a href="<?php echo $url ?>/" class="slide-nav-sub__link sub-item" itemprop="URL">subItem</a>
        </li>
        <li class="slide-nav-sub__item" itemprop="name">
          <a href="https://www.google.co.jp/" class="slide-nav-sub__link company" itemprop="URL" target="_blank" rel="nofollow">google</a>
        </li>
        <li class="slide-nav-sub__item" itemprop="name">
          <a href="https://github.com/" class="slide-nav-sub__link privacy" itemprop="URL" target="_blank" rel="nofollow">github</a>
        </li>
      </ul>
    </div>
  </transition>
</nav>
