<?php
include("../function.php");
$meta->pageName = "カラムテスト";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
include($inc . "/head.php");
include($inc . "/header.php");
?>
<div class="main">
  <header class="main__header">
    <?php include($inc . "/main-header.php"); ?>
  </header>

  <nav class="main__breadcrumb">
    <?php include($inc . "/main-breadcrumb.php"); ?>
  </nav>

  <div class="main__content">
    <section class="main__section">
      <article>
        <a href="" class="u-button">test</a>
        <hr>
        <div class="u-buttons">
          <a href="" class="u-button">test</a>
          <a href="" class="u-button">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</a>
        </div>
        <hr>
        <div class="u-buttons2">
          <a href="" class="u-button">test</a>
          <a href="" class="u-button">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</a>
        </div>
        <hr>
        <div class="u-buttons3">
          <a href="" class="u-button">test</a>
          <a href="" class="u-button">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</a>
          <a href="" class="u-button">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</a>
        </div>
        <hr>
        <div class="u-buttons4">
          <a href="" class="u-button">test</a>
          <a href="" class="u-button">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</a>
          <a href="" class="u-button">test</a>
          <a href="" class="u-button">つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</a>
        </div>
      </article>

      <article>
        <h2>u-column日本語</h2>
        <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
        <div class="u-grid">
          <div class="u-grid__item">
            <figure>
              <img src="<?php echo $img; ?>/dummy/yamato.png" alt="" class="u-img-max">
            </figure>
            <h3>h3.heading</h3>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
          </div>
          <div class="u-grid__item">
            <figure>
              <img src="<?php echo $img; ?>/dummy/yamato.png" alt="" class="u-img-max">
            </figure>
            <h3>h3.heading つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</h3>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
          </div>
          <div class="u-grid__item" style="background:#eee;">innerAera</div>
        </div>
      </article>

      <article>

        <div class="u-column3">
          <div class="u-column__wrapper">
            <div class="u-column__item">
              <div class="u-column__inner">
                <figure>
                  <img src="<?php echo $img; ?>/dummy/yamato.png" alt="" class="u-img-max">
                </figure>
                <h3>h3.heading</h3>
                <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
              </div>
            </div>
            <div class="u-column__item">
              <div class="u-column__inner">
                <figure>
                  <img src="<?php echo $img; ?>/dummy/yamato.png" alt="" class="u-img-max">
                </figure>
                <h3>h3.heading つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</h3>
                <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
              </div>
            </div>
            <div class="u-column__item">
              <div class="u-column__inner">
                <figure>
                  <img src="<?php echo $img; ?>/dummy/yamato.png" alt="" class="u-img-max">
                </figure>
                <h3>h3.heading</h3>
                <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
              </div>
            </div>
            <div class="u-column__item">
              <div class="u-column__inner">
                <figure>
                  <img src="<?php echo $img; ?>/dummy/yamato.png" alt="" class="u-img-max">
                </figure>
                <h3>h3.heading</h3>
                <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
              </div>
            </div>
            <div class="u-column__item">
              <div class="u-column__inner" style="background:#eee;">innerAera</div>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
</div>

<?php
include($inc . "/footer.php");
include($inc . "/foot.php");
?>
