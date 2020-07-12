<?php
include("../function.php");
$meta->pageName = "Components";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
$addStyles[] = '';
$addScripts[] = '<script src="assets/js/app.bundle.js"></script>';
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
      <h2>Vue components</h2>
      <p><code>the</code><code>base</code>vueコンポーネントのテストページです</p>
      <nav>
        <ul>
          <li>
            <a href="#" v-scroll-to="'#base-button'">base-button</a>
          </li>
          <li>
            <a href="#" v-scroll-to="'#base-buttons'">base-buttons</a>
          </li>
          <li>
            <a href="#" v-scroll-to="'#base-assist'">base-assist</a>
          </li>
        </ul>
      </nav>

      <article id="base-button">
        <h2>base-button</h2>

        <h3>base</h3>
        <base-button>button</base-button>
        <br>
        <base-button>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</base-button>

        <h3>tag type</h3>
        <base-button>button</base-button>
        <br>
        <base-button type="submit">button type="submit"</base-button>
        <br>
        <base-button href="">anchor</base-button>
        <br>
        <base-button href="" target="_blank">anchor target="_blank"</base-button>

        <h3>icon</h3>
        <p>with <a href="https://material.io/resources/icons/" target="_blank">material icons</a></p>
        <base-button>base</base-button>
        <br>
        <base-button icon="pdf">pdf</base-button>
        <br>
        <base-button icon="exit">exit</base-button>
        <br>
        <base-button icon="reset">reset</base-button>
        <br>
        <base-button icon="favorite_border">favorite_border</base-button>

        <h3>size</h3>
        <base-button>base 100%</base-button>
        <br>
        <base-button size="small">small</base-button>
        <br>
        <base-button size="medium">medium</base-button>
        <br>
        <base-button size="large">large</base-button>
        <br>
        <base-button size="333px">333px</base-button>
        <br>
        <base-button size="50%">50%</base-button>

        <h3>position</h3>
        <base-button>base</base-button>
        <br>
        <base-button position="left" size="large">left</base-button>
        <br>
        <base-button position="right" size="large">right</base-button>
        <br>
        <base-button position="center" size="large">center</base-button>

        <h3>color</h3>
        <base-button>base brand color</base-button>
        <br>
        <base-button color="point">point</base-button>
        <br>
        <base-button color="reset" icon="reset" type="reset">reset</base-button>
      </article>

      <article id="base-buttons">
        <h2>base-buttons</h2>

        <h3>base</h3>
        <base-buttons></base-buttons>
        <br>
        <base-buttons>
          <base-button>button</base-button>
          <base-button>button</base-button>
        </base-buttons>
        <br>
        <base-buttons>
          <base-button>button</base-button>
          <base-button>button</base-button>
          <base-button>button</base-button>
          <base-button>button</base-button>
        </base-buttons>
        <br>
        <base-buttons>
          <base-button>button</base-button>
          <base-button>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</base-button>
        </base-buttons>
      </article>

      <article id="base-assist">
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
include($inc . "footer.php");
include($inc . "foot.php");
?>
