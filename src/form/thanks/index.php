<?php
include("../../function.php");
$meta->pageName = "送信完了";
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
    <?php
      $breadcrumbAry = array(
        array("/form", "Form")
      );
      include($inc . "/main-breadcrumb.php");
    ?>
  </nav>

  <div class="main__content">
    <section class="main__section">
      <h2>お問い合わせの送信が完了いたしました。</h2>
      <p>当社にお問い合わせいただきまして、誠にありがとうございます。ご記入いただいたメールアドレスに<b>「自動返信メール」</b>をお送りいたしましたのでご確認ください。</p>
      <p>通常、3営業日ほどで、担当者よりご連絡させていただきます。</p>

      <div class="u-assist">
        <h3>数時間たっても「自動返信メール」が届かない場合</h3>
        <p>ご使用のメールソフトによっては、お送りしたメールが「迷惑メール」「スパムメール」に分類される場合があります。しばらくしてもメールが届かない場合は、「迷惑メール」などのフォルダをご確認ください。</p>
      </div>
      <div class="u-assist">
        <h3>数日たっても、担当者からの連絡がない場合</h3>
        <p>万一ご連絡が遅れている場合は、受付が完了していない可能性がございますので、お手数ですが<a href="form/">こちら</a>より、再度、お問い合わせをお願いいたします。</p>
      </div>
    </section>
  </div>
</div>

<?php
include($inc . "/footer.php");
include($inc . "/foot.php");
?>
