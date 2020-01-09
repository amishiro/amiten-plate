<?php
include("../function.php");
$meta->pageName = "カラムテスト";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
include($inc . "/head.php");
include($inc . "/header.php");
?>

<header class="main__header">
  <?php include($inc . "/main-header.php"); ?>
</header>

<div class="main__breadcrumb">
  <?php include($inc . "/main-breadcrumb.php"); ?>
</div>

<article class="main__conts">
  <section class="wrapper">
    <h2>u-column</h2>
    <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
    <div class="u-column3">
      <div class="u-column__wrapper">
        <div class="u-column__item">
          <div class="u-column__inner">
            <img src="<?php echo $img;?>/dummy/yamato.png" alt="" class="u-img-max">
            <h3>h3.heading</h3>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
          </div>
        </div>
        <div class="u-column__item">
          <div class="u-column__inner">
            <img src="<?php echo $img;?>/dummy/yamato.png" alt="" class="u-img-max">
            <h3>h3.heading つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</h3>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
          </div>
        </div>
        <div class="u-column__item">
          <div class="u-column__inner">
            <img src="<?php echo $img;?>/dummy/yamato.png" alt="" class="u-img-max">
            <h3>h3.heading</h3>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
          </div>
        </div>
        <div class="u-column__item">
          <div class="u-column__inner">
            <img src="<?php echo $img;?>/dummy/yamato.png" alt="" class="u-img-max">
            <h3>h3.heading</h3>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
          </div>
        </div>
        <div class="u-column__item">
          <div class="u-column__inner" style="background:#eee;">innerAera</div>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper">
    <h2>h2.heading</h2>
    <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
  </section>
  <section class="wrapper">
    <h2>h2.heading</h2>
    <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
  </section>
</article>

<?php
include($inc . "/footer.php");
include($inc . "/foot.php");
?>