function main() {
  const popUp = document.querySelector('.popup.popup-image');
  const promoBtn = document.querySelector('.promo__button');
  const popUpCloseBtn = document.querySelector('.popup__close');
  const popupContentImg = popUp.querySelector('.popup__content_img');
  const popupPreload = document.querySelector('.popup.popup-preload');
  const popupIntro = document.querySelector('.popup.popup-intro');

  // eslint-disable-next-line no-undef
  const introSwiper = new Swiper('.intro', {
    pagination: {
      el: '.intro__swiper-pagination',
      dynamicBullets: true,
    },
    navigation: {
      nextEl: '.intro__swiper-next',
      disabledClass: '.none',
    },
    on: {
      click: () => {
        if (introSwiper.isEnd) {
          popupIntro.style.display = 'none';
          document.querySelector('.header.header_smart-phone').style.display = 'flex';
        }
      },
    },
  });

  document.addEventListener('DOMContentLoaded', () => {
    if (popupPreload) {
      setTimeout(() => {
        popupPreload.style.display = 'none';
      }, 1000);
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
