function main() {
  const popUp = document.querySelector('.popup.popup-image');
  const promoBtn = document.querySelector('.promo__button');
  const popUpCloseBtn = document.querySelector('.popup__close');
  const popupContentImg = popUp.querySelector('.popup__content_img');
  const popupPreload = document.querySelector('.popup.popup-preload');
  const popupIntro = document.querySelector('.popup.popup-intro');
  const introSwiperNextBtn = document.querySelector('.intro__swiper-next');

  // для мобильного слайдера
  const marginLeft = window.screen.width - 325;
  if (window.screen.width < 450) {
    // - высота хедера - высота футера
    if (document.querySelector('.site-content').offsetHeight < window.screen.height - 58 - 65) {
      document.querySelector('.site-content').style.height = `${window.screen.height - 58 - 65}px`;
    }
  }

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
          // КОСТЫЛЬ !!!
          window.location.href = '?intro=false';
        }
      },
      slideChange: () => {
        switch (introSwiper.activeIndex) {
          case 0:
            introSwiperNextBtn.textContent = 'Далее';
            break;
          case 1:
            introSwiperNextBtn.textContent = 'Далее';
            break;
          case 2:
            introSwiperNextBtn.textContent = 'Открыть сайт';
            break;
          default:
            break;
        }
      },
    },
  });

  // eslint-disable-next-line no-undef
  const categoriesSwiper = new Swiper('.categories-slider__container', {
    speed: 400,
    spaceBetween: 10,
    on: {
      slideChange: () => {
        switch (categoriesSwiper.activeIndex) {
          case 0:
            categoriesSwiper.slides[1].style.marginLeft = '0px';
            break;
          case 1:
            categoriesSwiper.slides[1].style.marginLeft = `${marginLeft + 10}px`;
            categoriesSwiper.slides[2].style.marginLeft = '0px';
            break;
          case 2:
            categoriesSwiper.slides[2].style.marginLeft = `${marginLeft + 10}px`;
            categoriesSwiper.slides[3].style.marginLeft = '0px';
            break;
          case 3:
            categoriesSwiper.slides[3].style.marginLeft = `${marginLeft + 10}px`;
            break;
          default:
            break;
        }
      },
    },
  });

  document.addEventListener('DOMContentLoaded', () => {
    if (popupPreload) {
      setTimeout(() => {
        introSwiperNextBtn.textContent = 'Далее';
        popupPreload.style.display = 'none';
      }, 2000);
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
