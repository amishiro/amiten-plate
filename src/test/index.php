<?php
include("../function.php");
$meta->pageName = "Vue Test Page";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/app.bundle.js"></script>';
include($inc . "head.php");
include($inc . "header.php");
?>

<div class="main">
  <the-header title="VueTestPage"></the-header>
  <the-breadcrumb :breadcrumb="[{title:'VueTestPage', url: '/test'}]"></the-breadcrumb>

  <!-- thanks : https://github.com/cbracco/html5-test-page -->
  <section>
    <base-wrapper tag="article">
      <h2>Vue Test Page</h2>
      <p>vueの基本的なテンプレート構文（宣言レンダリング/条件分岐とループ<code>v-if / v-for</code>を学ためのページです。</p>
      <ul>
        <li>習学のために、<code>testMessage</code> / <code>testObject</code> / <code>testArray</code> へ、各種情報が初期設定されています。</li>
        <li>習学のために、<code>openData</code>へ、<a href="http://opendata.city.kitamoto.saitama.jp/dataset/p_4026_1419474496079/resource/3dcc9337-c166-45e9-987f-a27c211f3985" target="_blank">オープンデーター（北本の文化財データー）</a>を取得して格納しています。</li>
      </ul>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>宣言レンダリングテストスペース</h3>
      <p>課題: <code>testMessage</code>を使って、宣言レンダリングで表示してみよう。</p>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>ループテストスペース1</h3>
      <p>課題: <code>testObject</code>を使って、繰り返しをしてみよう。</p>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>ループテストスペース2</h3>
      <p>課題: <code>testArray</code>を使って、繰り返しをしてみよう。</p>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>ループテストスペース3</h3>
      <p>課題1: <code>openData</code>を、宣言レンダリングで表示しててみよう。</p>
      <p>課題2: <code>openData</code>を使って、繰り返しをしてみよう。</p>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>条件分岐テストスペース1</h3>
      <p>課題: <code>testArray</code>を使って、id:1の項目を表示してみよう。</p>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>条件分岐テストスペース2</h3>
      <p>課題: <code>testArray</code>を使って、id:1「<b>以外</b>」の項目を表示してみよう。</p>
    </base-wrapper>
  </section>
</div>

<?php
include($inc . "footer.php");
include($inc . "foot.php");
?>
