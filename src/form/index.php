<?php
include("../function.php");
$meta->pageName = "Form";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/form.bundle.js"></script>';
include($inc . "head.php");
include($inc . "header.php");
?>

<div class="main">
  <header class="main__header">
    <?php include($inc . "main-header.php"); ?>
  </header>

  <nav class="main__breadcrumb">
    <?php include($inc . "main-breadcrumb.php"); ?>
  </nav>

  <div class="main__content">
    <section class="main__section">
      <h2>一般的なフォーム</h2>
      <p>バリデーションには<a href="https://vueformulate.com/" target="_blank" rel="noopener">vue-formulate</a>を利用。</p>
      <aside class="u-assist is-outline">
        <ul>
          <li>営業時間外のお問い合わせについては、翌営業日より順次対応させていただきます。あらかじめご了承の程お願いいたします。</li>
          <li><span class="require-icon">必須</span>項目は、必ずご記入ください。</li>
        </ul>
      </aside>

      <?php include("./article-input-area.php"); ?>
      <?php include("./article-check-area.php"); ?>

    </section>
  </div>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
