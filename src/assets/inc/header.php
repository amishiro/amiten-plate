<header class="l-layout__header">

  <!-- layout header -->
  <div class="l-header">
    <div class="l-header__wrapper">
      <div class="l-header__logo" itemscope itemtype="http://schema.org/Organization">
        <a itemprop="url" href="<?php echo $url; ?>" class="l-header__logo-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="101" height="30" viewBox="0 0 101 30">
            <text id="HAGURUMA" transform="translate(7 26)" fill="#212121" font-size="16" font-family="Raleway">
              <tspan x="0" y="0">HAGURUMA</tspan>
            </text>
            <text id="YMMK" transform="translate(7 10)" fill="#212121" font-size="11" font-family="Raleway" font-weight="700">
              <tspan x="0" y="0">YMMK</tspan>
            </text>
            <line id="線_9" data-name="線 9" y2="25" transform="translate(0.5 0.5)" fill="none" stroke="#000" stroke-width="1" />
          </svg>

          <!-- <img itemprop="logo" src="assets/img/logo.png" /> -->
        </a>
      </div>

      <div class="l-header__gnav">
        <!-- layout global-nav -->
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

      <div class="l-header__slide-nav">
        <the-slide-nav-menu></the-slide-nav-menu>
        <the-slide-nav></the-slide-nav>
      </div>

    </div>
</header>
<main class="l-layout__main">
