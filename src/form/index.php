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
        <formulate-form v-model="form" name="contact">
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
              <tr>
                <th>
                  <label for="form-mail">
                    <span class="require-icon">必須</span>Eメール
                  </label>
                </th>
                <td>
                  <formulate-input id="form-mail" type="email" name="mail" placeholder="例：info@amiten.co.jp" validation="required|email"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-mail">
                    <span class="optional-icon">任意</span>電話番号
                  </label>
                </th>
                <td>
                  <formulate-input id="form-tel" type="tel" name="tel" help="半角数字でご記入ください" placeholder="例：000-0000-0000"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <span class="require-icon">必須</span>お問い合わせ項目
                </th>
                <td>
                  <formulate-input id="form-kind" type="radio" name="kind" validation="required" :options="{
                      'WEB・アプリ企画・制作に関する内容': 'WEB・アプリ企画・制作に関する内容',
                      'プログラミング教室・教材に関する内容': 'プログラミング教室・教材に関する内容',
                      '個人情報関するお問い合わせ': '個人情報関するお問い合わせ',
                      'その他': 'その他'
                    }"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-contents">
                    <span class="require-icon">必須</span>お問い合わせ内容
                  </label>
                </th>
                <td>
                  <formulate-input id="form-contents" type="textarea" name="contents" validation="required|max:250,length" :help="`最大入力文字数は250文字[ ${form.contents.length}/250 ]`"></formulate-input>
                </td>
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
