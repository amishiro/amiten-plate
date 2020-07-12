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

<div class="main">
  <section class="main__visual">
    <img src="assets/img/dummy/yamato.png" alt="dummy画像" class="u-img-fit">
  </section>
  <div class="main__content">
    <section class="main__section">
      <h2>h2.heading section</h2>
      <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
    </section>
    <article class="main__article">
      <h2>h2.heading article</h2>
      <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
    </article>
    <aside class="main__aside">
      <h2>h2.heading aside</h2>
      <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
    </aside>
  </div>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
