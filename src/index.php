<?php
include("function.php");
// $meta->pageName = "ページ名";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('home');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/app.bundle.js"></script>';
include($inc . "head.php");
include($inc . "header.php");
?>

<div>
  <!-- main visual -->
  <section class="p-visual">
    <img src="assets/img/dummy/yamato.png" alt="dummy画像">
  </section>

  <!-- contents -->
  <section class="u-wrapper">
    <article>
      <h2>h2.heading</h2>
      <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
    </article>

    <article>
      <h2>h2.heading</h2>
      <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
    </article>

    <article>
      <h2>h2.heading</h2>
      <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
    </article>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
