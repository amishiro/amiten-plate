<transition name="fade">
  <article v-show="inputFinished" class="check-area">
    <div class="check-area__background" @click="replySubmit"></div>
    <div class="check-area__field">
      <div class="check-area__field-inner" v-scroll-lock="inputFinished">
        <header class="u-assist is-outline">
          <h3>記入内容の確認</h3>
          <p>ご記入内容をご確認の上、「送信する」ボタンを押してください。</p>
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
          <button class="u-button is-send" @click="handleSubmit">
            送信する
          </button>
          <button class="u-button is-reply" @click="replySubmit">
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
