function main() {
  const popUp = document.querySelector('.popup.popup-image');
  const promoBtn = document.querySelector('.promo__button');
  const popUpCloseBtn = document.querySelector('.popup__close');
  const popupContentImg = popUp.querySelector('.popup__content_img');
  const popupPreload = document.querySelector('.popup.popup-preload');
  const popupIntro = document.querySelector('.popup.popup-intro');

  document.addEventListener('DOMContentLoaded', () => {
    if (popupPreload) {
      popupPreload.style.display = 'none';
      if (popupIntro) {
        popupIntro.style.display = 'flex';
      }
    }
  });

  if (promoBtn) {
    popUpCloseBtn.addEventListener('click', () => {
      popUp.classList.remove('popup_is-opened');
      popupContentImg.src = '';
    });

    window.addEventListener('mousedown', (event) => {
      if (event.target.classList.contains('popup')) {
        popUp.classList.remove('popup_is-opened');
        popupContentImg.src = '';
      }
    });

    window.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        popUp.classList.remove('popup_is-opened');
        popupContentImg.src = '';
      }
    });
    promoBtn.addEventListener('click', () => {
      popupContentImg.src = 'wp-content/uploads/2020/06/filters.mp4';
      popUp.classList.add('popup_is-opened');
    });
  }
}

main();
