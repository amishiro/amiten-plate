<?php
include("function.php");
$meta->pageName = "404";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('http404');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/app.bundle.js"></script>';
include($inc . "head.php");
include($inc . "header.php");
?>

<div class="main">
  <the-header title="404"></the-header>
  <the-breadcrumb :breadcrumb="[{title:'404', url: '/http404'}]"></the-breadcrumb>
  <section>
    <article class="u-wrapper">
      <h2>音速で探しましたが、お探しのページが見つかりませんでした。</h2>
      <p>
        お客さまがお探しのページが見つかりませんでした。URLが正しく入力されているかどうか、もう一度ご確認ください。
        <br>正しく入力してもページが表示されない場合は、ページが移動したか、もしくは掲載期間が終了し削除された可能性がございます。
      </p>
      <base-button href="/">
        <?php echo $meta->siteName; ?>トップへ
      </base-button>

    </article>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
