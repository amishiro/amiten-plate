<header class="l-layout__header">

  <!-- layout header -->
  <div class="l-header">
    <div class="l-header__wrapper">
      <div class="l-header__logo" itemscope itemtype="http://schema.org/Organization">
        <a itemprop="url" href="<?php echo $url; ?>" class="l-header__logo-link">
          <img itemprop="logo" src="assets/img/header/logo@2x.png" alt="歯車|HAGURUMA" />
        </a>
      </div>
      <!--
      <div class="l-header__gnav">

        <nav class="l-global-nav">
          <ul class="l-global-nav__wrapper" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <li class="l-global-nav__item" itemprop="name">
              <a href="" class="l-global-nav__link home" itemprop="URL">Home</a>
            </li>
            <li class="l-global-nav__item" itemprop="name">
              <a href="element/" class="l-global-nav__link element" itemprop="URL">Element</a>
            </li>
            <li class="l-global-nav__item" itemprop="name">
              <a href="form/" class="l-global-nav__link form" itemprop="URL">Form</a>
            </li>
            <li class="l-global-nav__item" itemprop="name">
              <a href="components/" class="l-global-nav__link components" itemprop="URL">Components</a>
            </li>
            <li class="l-global-nav__item" itemprop="name">
              <a href="test/" class="l-global-nav__link" itemprop="URL">Test</a>
            </li>
          </ul>
        </nav>
      </div>
-->
      <div class="l-header__menu">
        <!-- menu-icon -->
        <div class="l-menu-icon" @click="menu = !menu">
          <span :class="{'is-active': menu }"></span>
          <span :class="{'is-active': menu }"></span>
        </div>
        <!-- menu-navigation -->
        <nav class="l-menu-navigation" :class="{'is-active': menu }">

          <ul class="l-menu-navigation__list" :class="{'is-active': menu }">
            <li class="l-menu-navigation__list-item" :class="{'is-active': menu }">
              <a href="" class="l-menu-navigation__list-link">HOME</a>
            </li>
            <li class="l-menu-navigation__list-item" :class="{'is-active': menu }">
              <a href="about/" class="l-menu-navigation__list-link">ABOUT me</a>
            </li>
            <li class="l-menu-navigation__list-item" :class="{'is-active': menu }">
              <a href="what/" class="l-menu-navigation__list-link">WHAT is this</a>
            </li>
            <li class="l-menu-navigation__list-item" :class="{'is-active': menu }">
              <a href="link/" class="l-menu-navigation__list-link">LINKs</a>
            </li>
          </ul>

          <div class="l-menu-navigation__follow">
            <!-- follow -->
            <?php include($inc . '/BaseFooter.php'); ?>
          </div>
        </nav>
      </div>

    </div>
</header>
<main class="l-layout__main">
