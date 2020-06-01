function main() {
  const popUp = document.querySelector('.popup.popup-image');
  const promoBtn = document.querySelector('.promo__button');
  const popUpCloseBtn = document.querySelector('.popup__close');

  promoBtn.addEventListener('click', () => {
    popUp.classList.add('popup_is-opened');
  });

  popUpCloseBtn.addEventListener('click', () => {
    popUp.classList.remove('popup_is-opened');
  });
}

main();
