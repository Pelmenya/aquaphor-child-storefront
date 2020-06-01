function main() {
  const popUp = document.querySelector('.popup.popup-image');
  const promoBtn = document.querySelector('.promo__button');
  const popUpCloseBtn = document.querySelector('.popup__close');
  const popupContentImg = popUp.querySelector('.popup__content_img');

  promoBtn.addEventListener('click', () => {
    popUp.classList.add('popup_is-opened');
    popupContentImg.src = 'https://www.youtube.com/embed/LbLfrC-pDOc';
  });

  popUpCloseBtn.addEventListener('click', () => {
    popUp.classList.remove('popup_is-opened');
    popupContentImg.src = '';
  });
}

main();
