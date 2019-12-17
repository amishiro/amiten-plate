/*
name:gnav-deep_pc
desc:グロナビ下層の表示非表示（PC）
site:none(AmiTemplate-orign)
*/

// export
export default function () {
  /* ---------------setting---------------- */

  // 要素取得
  const gnavItems = document.querySelectorAll('.gnav__item')
  const getGnavItemFn = () => {
    const ary = []
    for (const el of gnavItems) {
      if (el.querySelector('.gnav-deep')) ary.push(el)
    }
    return ary
  }
  const hasDeepItemAry = getGnavItemFn()

  // 要素生成
  const mq = window.matchMedia('(max-width: 666px)')

  /* ---------------functions---------------- */

  const itemObjFn = (item) => {
    const link = item.querySelector('.gnav__link')
    const deep = item.querySelector('.gnav-deep')
    const deepItems = item.querySelectorAll('.gnav-deep__item')
    const deepLinks = item.querySelectorAll('.gnav-deep__link')
    const obj = {
      item: item,
      link: link,
      deep: deep,
      deepItems: deepItems,
      deepLinks: deepLinks,
    }
    return obj
  }

  const addClsss = (el) => el.classList.add('js-active')
  const aryAddClass = (els) => {
    for (const el of els) { el.classList.add('js-active') }
  }
  const removeClsss = (el) => {
    // console.log(el)
    el.classList.remove('js-active')
  }
  const aryRemoveClass = (els) => {
    for (const el of els) { el.classList.remove('js-active') }
  }

  const openFn = (item) => {
    const itemObj = itemObjFn(item)
    addClsss(itemObj.item)
    addClsss(itemObj.link)
    addClsss(itemObj.deep)
    aryAddClass(itemObj.deepItems)
    aryAddClass(itemObj.deepLinks)
  }

  const closeFn = (item) => {
    const itemObj = itemObjFn(item)
    removeClsss(itemObj.item)
    removeClsss(itemObj.link)
    removeClsss(itemObj.deep)
    aryRemoveClass(itemObj.deepItems)
    aryRemoveClass(itemObj.deepLinks)
  }
  /* ---------------set&run---------------- */

  // 実行内容
  const runFn = (mq) => {
    for (const el of hasDeepItemAry) {
      el.addEventListener('touchstart', (ev) => {
        openFn(ev.target)
      })
      el.addEventListener('mouseenter', (ev) => {
        openFn(ev.target)
      })
      el.addEventListener('mouseleave', (ev) => {
        closeFn(ev.target)
      })
      document.addEventListener('touchmove', () => {
        closeFn(el)
      })
    }
  }

  // 実行
  runFn(mq)
};
