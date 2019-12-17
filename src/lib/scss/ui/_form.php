
<section class="conts__item" id="forms">
  <header><h1>Form elements（フォーム要素）</h1></header>
  <ul>
    <li><a href="#forms__input">Input fields（入力）</a></li>
    <li><a href="#forms__select">Select menus（選択メニュー）</a></li>
    <li><a href="#forms__checkbox">Checkboxes（チェックボックス）</a></li>
    <li><a href="#forms__radio">Radio buttons（ラジオボタン）</a></li>
    <li><a href="#forms__textareas">Textareas（テキストエリア）</a></li>
    <li><a href="#forms__action">Action buttons（アクションボタン）</a></li>
  </ul>
  <form>
    <fieldset id="forms__input">
      <legend>Input fields（入力フィールド）</legend>
      <p>
        <label for="input__text">テキスト入力</label>
        <input id="input__text" type="text" placeholder="Text Input">
      </p>
      <p>
        <label for="input__password">パスワード</label>
        <input id="input__password" type="password" placeholder="Type your Password">
      </p>
      <p>
        <label for="input__webaddress">サイトURL</label>
        <input id="input__webaddress" type="url" placeholder="http://yoursite.com">
      </p>
      <p>
        <label for="input__emailaddress">Emailアドレス</label>
        <input id="input__emailaddress" type="email" placeholder="name@email.com">
      </p>
      <p>
        <label for="input__phone">電話番号</label>
        <input id="input__phone" type="tel" placeholder="999-999-9999">
      </p>
      <p>
        <label for="input__search">検索</label>
        <input id="input__search" type="search" placeholder="Enter Search Term">
      </p>
      <p>
        <label for="input__text2">数値入力</label>
        <input id="input__text2" type="number" placeholder="Enter a Number">
      </p>
    </fieldset>
    <fieldset id="forms__select">
      <legend>Select menus</legend>
      <p>
        <label for="select">Select（メニューの選択）</label>
        <select id="select">
          <optgroup label="選択">
            <option>Option One</option>
            <option>Option Two</option>
            <option>Option Three</option>
          </optgroup>
        </select>
      </p>
    </fieldset>

    <fieldset id="forms__checkbox">
      <legend>Checkboxes（チェックボックス）</legend>
      <ul>
        <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked">選択肢 A</label></li>
        <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox">選択肢 B</label></li>
        <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox">選択肢 C</label></li>
      </ul>
    </fieldset>

    <fieldset id="forms__radio">
      <legend>ラジオボタン</legend>
      <ul class="list list--bare">
        <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked">オプション 1</label></li>
        <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio">オプション 2</label></li>
        <li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio">オプション 3</label></li>
      </ul>
    </fieldset>

    <fieldset id="forms__textareas">
      <legend>テキストエリア</legend>
      <p>
        <label for="textarea">テキストエリア</label>
        <textarea id="textarea" rows="8" cols="48" placeholder="テキストエリア"></textarea>
      </p>
    </fieldset>

    <fieldset id="forms__action">
      <legend>Action buttons（アクションボタン）</legend>
      <p class="u-btn">
        <input type="submit" value="<input type=submit>" class="u-btn__item">
        <input type="button" value="<input type=button>" class="u-btn__item">
        <input type="reset" value="<input type=reset>" class="u-btn__item">
        <input type="submit" value="<input disabled>" disabled  class="u-btn__item">
      </p>
      <p class="u-btn">
        <button type="submit" class="u-btn__item">&lt;button type=submit&gt;</button z>
        <button type="button" class="u-btn__item">&lt;button type=button&gt;</button>
        <button type="reset" class="u-btn__item">&lt;button type=reset&gt;</button>
        <button type="button" disabled class="u-btn__item">&lt;button disabled&gt;</button>
      </p>
    </fieldset>

  </form>
</section>