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
    <div class=''>
      <h1><a name="title--歯車" class="md-header-anchor"></a><span>title = 歯車</span></h1>
      <h2><a name="header" class="md-header-anchor"></a><span>header</span></h2>
      <h3><a name="ブログの紹介" class="md-header-anchor"></a><span>ブログの紹介</span></h3>
      <ul>
        <li><span>物書きが東京近辺を散策するブログ</span></li>
        <li><span>主にグルメ中心</span></li>
        <li><span>/* articlesの中に最初の記事があってそこにリンク貼るとリアル */</span></li>
      </ul>
      <h3><a name="著者紹介" class="md-header-anchor"></a><span>著者紹介</span></h3>
      <ul>
        <li><span>芥川龍之介（ペンネーム）</span></li>
        <li><span>/* articlesの中に一本紹介記事書いてリンク貼る */</span></li>
      </ul>
      <h2><a name="sidebar" class="md-header-anchor"></a><span>sidebar</span></h2>
      <h3><a name="categories-of-contents" class="md-header-anchor"></a><span>categories of contents</span></h3>
      <ul>
        <li><span>カフェ</span></li>
        <li><span>甘味</span></li>
        <li><span>西洋食</span></li>
      </ul>
      <h3><a name="map-plugin" class="md-header-anchor"></a><span>Map Plugin</span></h3>
      <p><span>/* 記事で紹介した店を地図プラグインでマッピングする */</span></p>
      <h2><a name="main" class="md-header-anchor"></a><span>main</span></h2>
      <h3><a name="articles" class="md-header-anchor"></a><span>[articles]</span></h3>
      <p><span>/* article = API叩いて取ってくる記事コンテンツ */</span></p>
      <h4><a name="articletitle--ブログ始めました-自己紹介-お気に入りの店が-" class="md-header-anchor"></a><span>article.title = [ブログ始めました, 自己紹介, お気に入りの店が…, ...]</span></h4>
      <h4><a name="articlemain--" class="md-header-anchor"></a><span>article.main = [...]</span></h4>
      <p>&nbsp;</p>
      <p><span>～以下、実例～</span></p>
      <p>&nbsp;</p>
      <h5><a name="ブログ始めました" class="md-header-anchor"></a><span>ブログ始めました</span></h5>
      <p><span>1927年にもなって今更ですが、この頃の都心における文明開化はめざましいもので、自分も一つ日常を書き残そうかとブログを始めてみました。</span></p>
      <p><span>仕事の話から離れ、主に日常やグルメ等のネタを遺していけたらなと考えています。</span></p>
      <p>&nbsp;</p>
      <h5><a name="自己紹介" class="md-header-anchor"></a><span>自己紹介</span></h5>
      <p><span>芥川龍之介と申します。東大英文科を出たあと、翻訳・教職等を経験。</span></p>
      <p><span>今はぽつぽつライターやってます。神奈川在住。</span></p>
      <h2><a name="footer" class="md-header-anchor"></a><span>footer</span></h2>
      <ul>
        <li><span>コピーライト = 芥川龍之介</span></li>
        <li><span>簡易連絡先 = </span></li>
        <li><span>人気の記事リンク</span></li>
        <li><span>本当のコピーライト = ryo ymmk</span></li>
      </ul>
    </div>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
