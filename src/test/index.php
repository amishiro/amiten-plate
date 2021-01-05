<?php
include("../function.php");
$meta->pageName = "Test Pages";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/app.bundle.js"></script>';
include($inc . "head.php");
include($inc . "header.php");
?>

<div>
  <the-header title="TestPages"></the-header>
  <the-breadcrumb :breadcrumb="[{title:'TestPages', url: '/test'}]"></the-breadcrumb>

  <section class="u-wrapper">
    <article>
      <h1>テストページの一覧</h1>
      <p>amiten-plateを使った修学用テストページの一覧です。</p>
      <ul>
        <li><a href="test/vue.php">Vue Test page</a></li>
        <li><a href="test/markdown.php">Markdown Test page</a></li>
      </ul>
    </article>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
