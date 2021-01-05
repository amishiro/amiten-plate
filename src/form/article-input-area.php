<article>
  <formulate-form v-model="form" name="contact" @submit="handleTrigger">
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
            }">
            </formulate-input>
            <formulate-input id="addressLevel" type="text" name="addressLevel" label="都道府県、市区町村（海外の方は、国名よりご記入ください）" autocomplete="address-level1 address-level2" placeholder="例：東京都千代田区" validation="required" 　:validation-messages="{
              required: '都道府県、市区町村をご記入ください'
            }">
            </formulate-input>
            <formulate-input id="addressLine" type="text" name="addressLine" label="それ以降の住所（番地など）" autocomplete="address-line1 address-line2" placeholder="例：千代田1-1">
            </formulate-input>
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
            }">
            </formulate-input>
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
            }">
            </formulate-input>
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
            }">
            </formulate-input>
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
              '個人情報に関するお問い合わせ': '個人情報に関するお問い合わせ',
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
            <formulate-input id="form-contents" type="textarea" name="contents" validation="required|max:250,length" :help="`最大文字数は250文字[ ${form.contents.length}/250 ]`" :validation-messages="{
              required: 'お問い合わせ内容をご記入ください',
              max: '250文字以内でご記入ください'
            }">
            </formulate-input>
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

    <base-buttons>
      <base-button class="u-button is-primary" type="submit">
        記入内容を確認する
      </base-button>
      <base-button class="u-button is-reset" type="reset" color="reset" @click="handleReset()">
        内容を削除する
      </base-button>
    </base-buttons>
  </formulate-form>
</article>
