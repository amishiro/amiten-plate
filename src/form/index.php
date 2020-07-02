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
        <formulate-form v-model="form" name="contact" @submit="handleTrigger">
          <!-- <input type="hidden" name="form-name" value="contact"> -->
          <p><span class="require-icon">必須</span>項目は、必ずご入力ください。</p>
          <table class="form-table">
            <colgroup>
              <col span="1" style="width: 220px;">
              <col span="1" style="width: auto;">
            </colgroup>
            <tbody>
              <tr>
                <th>
                  <label for="form-name">
                    <span class="require-icon">必須</span>お名前
                  </label>
                </th>
                <td>
                  <formulate-input id="form-name" type="text" name="name" autocomplete="name" placeholder="例：網展 太郎" validation="required" :validation-messages="{
                    required: 'お名前をご記入ください'
                    }">
                  </formulate-input>
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
                    required: 'フリガナをご記入ください',
                    matches: '全角カタカナでご記入ください'
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
                  <formulate-input id="postalCode" type="text" name="postalCode" label="郵便番号" autocomplete="postal-code" placeholder="例：100-8111" help="半角数字でご記入ください" validation="required|matches:/^\d{3}-?\d{4}$/" :validation-messages="{
                    required: '郵便番号をご記入ください',
                    matches: '正しい郵便番号を半角数字でご記入ください'
                  }"></formulate-input>
                  <formulate-input id="addressLevel" type="text" name="addressLevel" label="都道府県、市区町村（海外の方は、国名よりご入力ください）" autocomplete="address-level1 address-level2" placeholder="例：東京都千代田区" validation="required" 　:validation-messages="{
                    required: '都道府県、市区町村をご記入ください'
                    }">></formulate-input>
                  <formulate-input id="addressLine" type="text" name="addressLine" label="それ以降の住所（番地など）" autocomplete="address-line1 address-line2" placeholder="例：千代田1-1"></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-mail">
                    <span class="require-icon">任意</span>電話番号
                  </label>
                </th>
                <td>
                  <formulate-input id="form-tel" type="tel" name="tel" autocomplete="tel" help="半角数字でご記入ください" placeholder="例：000-0000-0000" validation="required|matches:/^[0-9\-]+$/" :validation-messages="{
                    required: '電話番号をご記入ください',
                    matches: '正しい電話番号を半角数字でご記入ください'
                    }">></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-mail">
                    <span class="require-icon">必須</span>メールアドレス
                  </label>
                </th>
                <td>
                  <formulate-input id="form-mail" type="email" name="mail" autocomplete="email" placeholder="例：info@amiten.co.jp" validation="required|email" :validation-messages="{
                    required: 'メールアドレスをご記入ください',
                    email: '有効なメールアドレスをご記入ください'
                    }">></formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-mail-confirm">
                    <span class="require-icon">必須</span>メールアドレス（確認）
                  </label>
                </th>
                <td>
                  <formulate-input id="form-mail-confirm" help="確認のため、もう1度ご記入ください" type="email" name="mail-confirm" autocomplete="email" placeholder="例：info@amiten.co.jp" validation="required|confirm:mail" :validation-messages="{
                    required: 'メールアドレス（確認）をご記入ください',
                    confirm: '同じメールアドレスをご記入ください'
                    }">></formulate-input>
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
                    }" :validation-messages="{
                      required: 'お問い合わせ項目をお選びください'
                    }">
                  </formulate-input>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="form-contents">
                    <span class="require-icon">必須</span>お問い合わせ内容
                  </label>
                </th>
                <td>
                  <formulate-input id="form-contents" type="textarea" name="contents" validation="required|max:250,length" :help="`最大入力文字数は250文字[ ${form.contents.length}/250 ]`" :validation-messages="{
                      required: 'お問い合わせ内容をご記入ください'
                    }">></formulate-input>
                </td>
            </tbody>
          </table>

          <div class="u-assist">
            <h5>
              <span class="require-icon">必須</span>個人情報の取り扱いについて
            </h5>
            <p>
              ご提供いただきましたお客さまの個人情報につきましては、弊社の<a href="#" target="_blank">プライバシーポリシー</a>に従い利用および管理を行ないます。
            </p>
            <div class="u-assist__inner">
              <formulate-input id="form-policy" type="checkbox" name="policy" validation="required" label="上記のプライバシーポリシーに同意する" :validation-messages="{
                required: 'プライバシーポリシーに同意してください'
              }">
              </formulate-input>
            </div>
          </div>

          <div class="u-buttons">
            <button class="u-button is-primary" type="submit">
              入力内容を確認する
            </button>
            <button class="u-button is-cancel" type="reset" @click="handleReset()">
              内容を削除する
            </button>
          </div>
        </formulate-form>
      </article>

      <transition name="fade">
        <article v-show="inputFinished" class="check-area">
          <div class="check-area__background" @click="replySubmit"></div>
          <div class="check-area__field">
            <div v-scroll-lock="inputFinished" class="check-area__field-inner">
              <header>
                <h3>入力内容の確認</h3>
                <p>ご入力内容をご確認の上、「送信する」ボタンを押してください。</p>
              </header>
              <dl>
                <dt>お名前</dt>
                <dd>{{ form.name }}</dd>
              </dl>
              <dl>
                <dt>フリガナ</dt>
                <dd>{{ form.nameKana }}</dd>
              </dl>
              <dl>
                <dt>ご住所</dt>
                <dd>〒{{ form.postalCode }}{{ form.addressLevel }}{{ form.addressLine }}</dd>
              </dl>
              <dl>
                <dt>電話番号</dt>
                <dd>{{ form.tel }}</dd>
              </dl>
              <dl>
                <dt>メールアドレス</dt>
                <dd>{{ form.mail }}</dd>
              </dl>
              <dl>
                <dt>お問い合わせ項目</dt>
                <dd>{{ form.kind }}</dd>
              </dl>
              <dl>
                <dt>お問い合わせ内容</dt>
                <dd>{{ form.contents }}</dd>
              </dl>
              <div class="u-buttons" v-if="!sending">
                <button class="u-button is-primary is-send" @click="handleSubmit">
                  送信する
                </button>
                <button class="u-button is-cancel is-reply" @click="replySubmit">
                  修正する
                </button>
              </div>
              <div v-if="sending" class="check-area__sending">
                <i class="material-icons">sync</i>送信中...
              </div>
            </div>
            <div class="check-area__close" @click="replySubmit">
              <i class="material-icons">close</i>
            </div>
          </div>
        </article>
      </transition>

    </section>
  </div>
</div>

<?php
include($inc . "/footer.php");
include($inc . "/foot.php");
?>
