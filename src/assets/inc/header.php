<header class="layout__header">
  <div class="header">
    <div class="header__wrapper">
      <div class="header__logo">
        <div class="logo" itemscope itemtype="http://schema.org/Organization">
          <a itemprop="url" href="<?php echo $url; ?>">
            amitemplate
            <!-- <img itemprop="logo" src="assets/img/logo.png" /> -->
          </a>
        </div>
      </div>

      <div class="header__gnav">
        <nav class="gnav">
          <ul class="gnav__wrapper" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <li class="gnav__item" itemprop="name">
              <a href="" class="gnav__link home" itemprop="URL">Home</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="element/" class="gnav__link element" itemprop="URL">Element</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="form/" class="gnav__link form" itemprop="URL">Form</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="ui/" class="gnav__link ui" itemprop="URL">UI</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="column/" class="gnav__link column" itemprop="URL">Column</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="" class="gnav__link" itemprop="URL">Home</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="header__slide-nav" id="slide-nav">
        <?php include($inc . "slide-nav-menu.php") ;?>
        <?php include($inc . "slide-nav.php") ;?>
      </div>

    </div>
</header>
<main class="layout__main">
