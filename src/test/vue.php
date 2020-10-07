<?php
include("../function.php");
$meta->pageName = "Vue Test Page";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('vue-test-page');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/app.bundle.js"></script>';
include($inc . "head.php");
include($inc . "header.php");
?>

<div class="main">
  <the-header title="VueTestPage"></the-header>
  <the-breadcrumb :breadcrumb="[{title:'TestPages', url: '/test'}, {title:'VueTestPage', url: '/test/vue.php'}]"></the-breadcrumb>

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
      <h3>課題1：宣言レンダリング</h3>
      <p>宣言レンダリング<code v-pre>{{ testMessage }}</code>を使って、宣言レンダリングで表示してみよう。</p>
      <pre v-pre>&lt;p&gt;{{ testMessage }}&lt;/p&gt;</pre>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>課題2：オブジェクトのループ</h3>
      <p>オブジェクトデーター<code v-pre>testObject</code>を使って、繰り返しをしてみよう。</p>
      <pre v-pre>&lt;ul&gt;
  &lt;li v-for=&quot;(value, key) in testObject&quot;&gt;{{key}}: {{value}}&lt;/li&gt;
&lt;/ul&gt;</pre>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>課題3：配列のループ</h3>
      <p>配列データー<code>testArray</code>を使って、繰り返しをしてみよう。</p>
      <pre v-pre>&lt;ul&gt;
  &lt;li v-for=&quot;value in testArray&quot;&gt;{{value}}&lt;/li&gt;
&lt;/ul&gt;</pre>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>課題4：オープンデーター（大量の情報）の取得</h3>
      <p>オープンデーター<code v-pre>openData</code>を、宣言レンダリングで表示しててみよう。</p>
      <pre v-pre>&lt;pre&gt;{{openData}}&lt;/pre&gt;</pre>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>課題5: オープンデーター(大量の情報)のループ</h3>
      <p>オープンデーター<code v-pre>openData</code>を、ループで表示しててみよう。</p>
      <pre v-pre>&lt;ul&gt;
  &lt;li v-for=&quot;value in openData&quot;&gt;{{value}}&lt;/li&gt;
&lt;/ul&gt;</pre>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>課題6: オープンデーター(大量の情報)の表示をコントロール</h3>
      <p>オープンデーター<code>openData</code>を使って、ループした情報から、宣言レンダリングで<b>名称/種別/所在地だけ</b>を表示してみよう。</p>
      <pre v-pre>&lt;ul&gt;
  &lt;li v-for=&quot;value in openData&quot;&gt;
    &lt;h4&gt;{{ value[&#039;名称&#039;] }}&lt;/h4&gt;
    &lt;ul&gt;
      &lt;li&gt;種別: {{ value[&#039;種別&#039;] }}&lt;/li&gt;
      &lt;li&gt;所在地: {{ value[&#039;所在地&#039;] }}&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>課題7: オープンデーター（大量の情報）をレイアウトする</h3>
      <p>課題6をCSSのflex-boxを使って3列レイアウトをしてみよう。</p>
      <pre v-pre>&lt;div class=&quot;three-layout&quot;&gt;
  &lt;ul class=&quot;three-layout__wrapper&quot;&gt;
    &lt;li class=&quot;three-layout__item&quot; v-for=&quot;value in openData&quot;&gt;
      &lt;h4&gt;{{ value[&#039;名称&#039;] }}&lt;/h4&gt;
      &lt;ul&gt;
        &lt;li&gt;種別: {{ value[&#039;種別&#039;] }}&lt;/li&gt;
        &lt;li&gt;所在地: {{ value[&#039;所在地&#039;] }}&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</pre>
    </base-wrapper>

    <base-wrapper tag="article">
      <h3>課題8: オープンデーター（大量の情報）をデザインする</h3>
      <p>課題7の中の名称等をCSSのflex-boxを使ってデザインを入れてみよう。</p>
      <pre v-pre>&lt;div class=&quot;three-layout&quot;&gt;
  &lt;ul class=&quot;three-layout__wrapper&quot;&gt;
    &lt;li class=&quot;three-layout__item&quot; v-for=&quot;value in openData&quot;&gt;
      &lt;div class=&quot;open-data-item&quot;&gt;
        &lt;div class=&quot;open-data-item__wrapper&quot;&gt;
          &lt;h4 class=&quot;open-data-item__name&quot;&gt;{{ value[&#039;名称&#039;] }}&lt;/h4&gt;
          &lt;ul class=&quot;open-data-item__info&quot;&gt;
            &lt;li class=&quot;open-data-item__info-kind&quot;&gt;種別: {{ value[&#039;種別&#039;] }}&lt;/li&gt;
            &lt;li class=&quot;open-data-item__info-place&quot;&gt;所在地: {{ value[&#039;所在地&#039;] }}&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</pre>
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
