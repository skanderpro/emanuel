document.addEventListener('DOMContentLoaded', function () {
  function openPopup() {
    const body = document.querySelector('body')
    const btnOpenPopup = document.querySelector('.popup-open')
    const popup = document.querySelector('.popup')
    const btnClosePopup = document.querySelectorAll('.btn-close-popup')

    btnOpenPopup.addEventListener('click', () => {
      popup.classList.add('open')
      body.classList.add('hiden')
    })
    for (let i = 0; i < btnClosePopup.length; i++) {
      btnClosePopup[i].addEventListener('click', () => {
        popup.classList.remove('open')
        body.classList.remove('hiden')
      })
    }

    document.onclick = (e) => {
      if (e.target.classList.value === 'popup__body') {
        popup.classList.remove('open')
        body.classList.remove('hiden')
      }
    }
  }
  openPopup()
})
