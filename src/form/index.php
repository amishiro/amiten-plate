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

<div>
  <the-header title="Form"></the-header>
  <the-breadcrumb :breadcrumb="[{title:'Form', url: '/form'}]"></the-breadcrumb>

  <section class="u-wrapper">
    <article>
      <h2>一般的なフォーム</h2>
      <p>バリデーションには<a href="https://vueformulate.com/" target="_blank" rel="noopener">vue-formulate</a>を利用。<small>※vee-validateへ変更する可能性あり。</small></p>

      <aside class="u-assist is-outline">
        <ul>
          <li>営業時間外のお問い合わせについては、翌営業日より順次対応させていただきます。あらかじめご了承の程お願いいたします。</li>
          <li><span class="require-icon">必須</span>項目は、必ずご記入ください。</li>
        </ul>
      </aside>

      <?php include("./article-input-area.php"); ?>
      <?php include("./article-check-area.php"); ?>
    </article>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
