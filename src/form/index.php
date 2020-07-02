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
              <col span="1" style="width: 220px;">
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
                  <formulate-input id="form-name" type="text" name="name" autocomplete="name" placeholder="例：網展 太郎" validation="required"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-name-kana">
                    <span class="require-icon">必須</span>フリガナ
                  </label>
                </th>
                <td>
                  <formulate-input id="form-name-kana" type="text" name="nameKana" placeholder="例：アミテン　タロウ" help="全角カタカナでご記入ください" validation="required|matches:/^[ア-ン゛゜ァ-ォャ-ョー「」、\s　]+$/" :validation-messages="{
                    matches: 'Please pick your favorite food'
                    }">
                  </formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label>
                    <span class="require-icon">必須</span>ご住所
                  </label>
                </th>
                <td>
                  <formulate-input type="text" name="postalCode" label="郵便番号" autocomplete="postal-code" placeholder="例：100-8111" help="半角数字でご記入ください" validation="required|matches:/^\d{3}-?\d{4}$/" :validation-messages="{
                    matches: '正しい郵便番号を入力してください'
                  }"></formulate-input>
                  <formulate-input type="text" name="addressLevel" label="都道府県、市区町村（海外の方は、国名よりご入力ください）" autocomplete="address-level1 address-level2" placeholder="例：東京都千代田区" validation="required"></formulate-input>
                  <formulate-input type="text" name="addressLine" label="それ以降の住所（番地など）" autocomplete="address-line1 address-line2" placeholder="例：千代田1-1"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-mail">
                    <span class="optional-icon">任意</span>電話番号
                  </label>
                </th>
                <td>
                  <formulate-input id="form-tel" type="tel" name="tel" autocomplete="tel" help="半角数字でご記入ください" placeholder="例：000-0000-0000" validation="required|matches:/^[0-9\-]+$/"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-mail">
                    <span class="require-icon">必須</span>メールアドレス
                  </label>
                </th>
                <td>
                  <formulate-input id="form-mail" type="email" name="mail" autocomplete="email" placeholder="例：info@amiten.co.jp" validation="required|email"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-mail-confirm">
                    <span class="require-icon">必須</span>メールアドレス（確認）
                  </label>
                </th>
                <td>
                  <formulate-input id="form-mail-confirm" help="確認のため、もう1度ご記入ください" type="email" name="mail-confirm" autocomplete="email" placeholder="例：info@amiten.co.jp" validation="required|confirm:mail"></formulate-input>
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
