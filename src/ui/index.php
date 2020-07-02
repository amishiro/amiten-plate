<?php
include("../function.php");
$meta->pageName = "UI";
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
    <?php include($inc . "/main-breadcrumb.php"); ?>
  </nav>

  <div class="main__content">
    <section class="main__section">
      <h2>HTML5 Test Page</h2>
      <p><code>u-xxxx</code>でスタイリングするHTML要素のテストページです</p>
      <nav>
        <ul>
          <li>
            <a href="#" v-scroll-to="'#ui__button'">u-button</a>
          </li>
          <li>
            <a href="#" v-scroll-to="'#ui__assist'">u-assist</a>
          </li>
        </ul>
      </nav>

      <article id="ui__button">
        <h2>u-button</h2>
        <h3>base</h3>
        <a href="#" class="u-button">u-button</a>
        <h3>is-color</h3>
        <a href="#" class="u-button is-point">u-button</a>
        <h3>is-icons</h3>
        <a href="#" class="u-button is-pdf">u-button</a>
        <br>
        <a href="#" class="u-button is-down">u-button</a>
        <h3>is-active</h3>
        <a href="#" class="u-button is-active">u-button</a>
        <h2>u-buttons</h2>
        <h3>base</h3>
        <div class="u-buttons">
          <a href="#" class="u-button">u-button</a>
          <a href="#" class="u-button">u-button</a>
        </div>
        <h3>with u-assist</h3>
        <div class="u-assist u-buttons">
          <a href="#" class="u-button">u-button</a>
          <a href="#" class="u-button">u-button</a>
        </div>
      </article>

      <article id="ui__assist">
        <h2>u-assist</h2>
        <h3>base</h3>
        <div class="u-assist">
          <h3>hedding</h3>
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
        </div>
        <h3>is-point</h3>
        <div class="u-assist is-point">
          <h3>hedding</h3>
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
        </div>
        <h3>is-outline</h3>
        <div class="u-assist is-outline">
          <h3>hedding</h3>
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
        </div>
        <h3>is-info</h3>
        <div class="u-assist is-info">
          <h3>hedding</h3>
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
        </div>
        <h3>is-warning</h3>
        <div class="u-assist is-warning">
          <h3>hedding</h3>
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書（５０文字）</p>
        </div>
      </article>

    </section>
  </div>
</div>

<?php
include($inc . "/footer.php");
include($inc . "/foot.php");
?>
