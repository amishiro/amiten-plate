/*
name:gnav-visible_sp
desc:ナビゲーションの表示非表示(スマートフォン時)
site:none(AmiTemplate-orign)
*/

// export
export default function () {
  /* ---------------setting---------------- */

  // 要素取得
  const htmlEl = document.querySelector('html')
  const bodyEl = document.querySelector('body')
  const gnavEl = document.querySelector('.gnav')
  const menubarEl = document.querySelector('.menubar')

  // 要素生成
  const mq = window.matchMedia('(max-width: 666px)')
  const gnavBgEl = document.createElement('div')
  gnavBgEl.setAttribute('class', 'gnav__bg')
  gnavEl.parentNode.insertBefore(gnavBgEl, gnavEl)

  /* ---------------functions---------------- */

  // スクロール禁止イベント
  const stopScrollEvent = (ev) => {
    // class内のElementかどうか真偽
    const isContains = (className, el) => {
      let parent = el
      for (let i = 0; parent; i++) {
        if (parent.nodeName === 'BODY') return false
        if (parent.classList.contains(className)) return true
        parent = parent.parentNode
      }
    }
    // 実行
    if (!isContains('gnav', ev.target)) ev.preventDefault()
  }

  // スクロール禁止
  const noScrollFn = () => {
    htmlEl.style.overflow = 'hidden'
    bodyEl.style.overflow = 'hidden'
    document.addEventListener('touchmove', stopScrollEvent)
  }

  // スクロール復活
  const returnScrollFn = () => {
    htmlEl.style.overflow = ''
    bodyEl.style.overflow = ''
    document.removeEventListener('touchmove', stopScrollEvent)
  }

  // 背景のアニメーション
  const gnavBgAnime = (duration) => {
    return gnavBgEl.animate([{
      opacity: 0,
    }, {
      opacity: 1,
    }], {
      direction: duration,
      duration: 100,
      easing: 'ease',
      fill: 'both',
    })
  }

  // menubarクリック時の挙動
  const clickMenubar = () => {
    const isContains = menubarEl.classList.contains('js-active')
    if (!isContains) {
      noScrollFn()
      menubarEl.classList.add('js-active')
      gnavEl.classList.add('js-active')
      gnavBgEl.style.display = 'block'
      gnavBgAnime('normal').play()
    } else {
      returnScrollFn()
      menubarEl.classList.remove('js-active')
      gnavEl.classList.remove('js-active')
      gnavBgAnime('reverse').play()
      gnavBgAnime('reverse').onfinish = () => {
        gnavBgEl.style.display = 'none'
      }
    }
  }

  /* ---------------set&run---------------- */

  // 初回表示時＆レスポンシブ切替時
  const setFn = (mq) => {
    if (mq.matches) {
      gnavBgEl.style.display = 'none'
      gnavBgEl.style.opacity = '0'
      returnScrollFn()
      gnavBgAnime('normal').play()
      gnavBgAnime('normal').pause()
      menubarEl.classList.remove('js-active')
    } else {
      gnavBgEl.style.display = 'none'
      gnavBgEl.style.opacity = '0'
      gnavEl.style.transform = ''
      gnavEl.removeAttribute('style')
      gnavEl.classList.remove('js-active')
      menubarEl.classList.remove('js-active')
      returnScrollFn()
    }
  }

  // 実行内容
  const runFn = (mq) => {
    if (mq.matches) {
      menubarEl.addEventListener('mousedown', clickMenubar)
      menubarEl.addEventListener('touchenter', clickMenubar)
    } else {
      menubarEl.removeEventListener('mousedown', clickMenubar)
      menubarEl.removeEventListener('touchenter', clickMenubar)
    }
  }

  // 実行
  mq.addListener(setFn)
  mq.addListener(runFn)
  setFn(mq)
  runFn(mq)
}
