/************************
smooth-scroll
site:https://github.com/cferdinandi/smooth-scroll
***********************/

// node_module
import SmoothScroll from 'smooth-scroll'

// original-css
// none

// export
export default function () {
  // eslint-disable-next-line no-unused-vars
  const scroll = new SmoothScroll('[data-scroll]', {

    // Selectors
    ignore: '[data-scroll-ignore]', // 無視するリンクのセレクタ
    header: null, // 固定ヘッダーのセレクタ

    // Speed & Easing
    speed: 160, // スクロールを完了するまでの時間
    offset: 0, // オフセットする距離
    easing: 'easeInOutCubic', // イージングパターン
    customEasing: function (time) {}, // カスタムイージング

    // Callback API
    before: function () {},
    after: function () {}
  })
}
