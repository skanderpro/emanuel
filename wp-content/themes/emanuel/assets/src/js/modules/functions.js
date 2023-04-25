/* Проверка поддержки webp, добавление класса webp или no-webp для HTML */
// export function isWebp() {
//   // Проверка поддержки webp
//   function testWebP(callback) {
//     let webP = new Image()
//     webP.onload = webP.onerror = function () {
//       callback(webP.height == 2)
//     }
//     webP.src =
//       'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA'
//   }
//   // Добавление класса _webp или _no-webp для HTML
//   testWebP(function (support) {
//     let className = support === true ? 'webp' : 'no-webp'
//     document.documentElement.classList.add(className)
//   })
// }
const body = document.querySelector('body')
export function openBurgerMenu() {
  const btn = document.querySelector('.header__menu-btn')
  const nav = document.querySelector('.header__inner-nav')

  btn.addEventListener('click', () => {
    btn.classList.toggle('open')
    nav.classList.toggle('active')
    body.classList.toggle('hiden')
  })
}
export function openBurgerMenuDropDown() {
  const btnsDropDown = document.querySelectorAll('.nav-list-item.drop-down')

  for (let i = 0; i < btnsDropDown.length; i++) {
    const btnDropDown = btnsDropDown[i]
    btnDropDown.addEventListener('click', () => {
      if (btnDropDown.classList.contains('open')) {
        btnDropDown.classList.remove('open')
      } else {
        btnsDropDown.forEach((child) => child.classList.remove('open'))

        btnDropDown.classList.toggle('open')
      }
    })
  }
}


