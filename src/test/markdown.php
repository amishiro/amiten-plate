<?php
include("../function.php");
$meta->pageName = "Markdown Test Page";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/app.bundle.js"></script>';
include($inc . "head.php");
include($inc . "header.php");
?>

<div class="main">
  <the-header title="MarkdownTestPage"></the-header>
  <the-breadcrumb :breadcrumb="[{title:'TestPages', url: '/test'},{title:'MarkDownTestPage', url: '/test/markdown.php'}]"></the-breadcrumb>

  <section>
    <base-wrapper tag="article">
      <h1>Markdown用です。</h1>
      <p>課題1: <a href="https://typora.io/">typora</a>で書いたMarkdownをhtmlへ変換してページを作成する。</p>
    </base-wrapper>

    <base-wrapper tag="article">

      <!-- ↓ マークダウンから出力したhtmlをペースト -->

      <!-- ↑ マークダウンから出力したhtmlをペースト -->

    </base-wrapper>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
