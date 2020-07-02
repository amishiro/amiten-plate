<?php
include("../function.php");
$meta->pageName = "Form";
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
      <h2>世界一お問い合わせしやすいフォームをめざして。</h2>
      <a href="https://vueformulate.com/" target="_blank" rel="noopener">vue-formulate</a>を利用したフォーム。

      <article>
        <formulate-form name="contact">
          <!-- <input type="hidden" name="form-name" value="contact"> -->
          <p><span class="require-icon">必須</span>項目は、必ずご入力ください。</p>
          <table>
            <colgroup>
              <col span="1" style="width: 200px;">
              <col span="1" style="width: auto;">
            </colgroup>
            <tbody>
              <tr>
                <th>
                  <label for="form-name">
                    <span class="require-icon">必須</span>名前
                  </label>
                </th>
                <td>
                  <formulate-input id="form-name" type="text" name="name" placeholder="例：網展 太郎" validation="required"></formulate-input>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="u-buttons">
            <button class="u-button is-primary" type="submit">
              入力内容を確認する
            </button>
            <button class="u-button is-cancel">
              内容を削除する
            </button>
          </div>
        </formulate-form>
      </article>

    </section>
  </div>
</div>

<?php
include($inc . "/footer.php");
include($inc . "/foot.php");
?>
