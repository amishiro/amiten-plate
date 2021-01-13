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
  <!-- contents -->
  <section class="u-wrapper">
    <h1>ブログ始めました</h1>
    <img src="assets/img/dummy/square.png" alt="">
    <p>1927年にもなって今更ですが、この頃の都心における文明開化はめざましいもので、自分も一つ日常を書き残そうかとブログを始めてみました。</p>
    <p>仕事の話から離れ、主に日常やグルメ等のネタを遺していけたらなと考えています。</p>

    <a href="">READ MORE</a>
  </section>
  <!-- /contents -->

  <!-- articles -->
  <section class="u-wrapper">

    <div class="articles">
      <div class="articles__wrapper">
        <h2 class="articles__title">
          <span>Article</span>記事一覧
        </h2>
        <ul class="articles__list">
          <li class="articles__item"><a href="">
              <span>2021/1/04</span>
              ブログ始めました
              <svg xmlns="http://www.w3.org/2000/svg" width="31.721" height="9.077" viewBox="0 0 31.721 9.077">
                <path id="パス_788" data-name="パス 788" d="M328.094,3281H358.9l-5.287-8.309" transform="translate(-328.094 -3272.423)" fill="none" stroke="#000" stroke-width="1" />
              </svg>

            </a></li>
          <li class="articles__item"><a href="">
              <span>2021/1/04</span>
              つれづれなるまゝに、日暮らし、硯あああ（25文字）
              <svg xmlns="http://www.w3.org/2000/svg" width="31.721" height="9.077" viewBox="0 0 31.721 9.077">
                <path id="パス_788" data-name="パス 788" d="M328.094,3281H358.9l-5.287-8.309" transform="translate(-328.094 -3272.423)" fill="none" stroke="#000" stroke-width="1" />
              </svg>

            </a></li>
        </ul>
      </div>
    </div>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
