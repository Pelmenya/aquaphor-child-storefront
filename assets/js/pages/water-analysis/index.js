function setSmartPhoneScript() {
  const waterSwiperNextBtn = document.querySelector('.water-analysis-smart__next');
  // eslint-disable-next-line no-undef
  const waterSwiper = new Swiper('.water-analysis-smart__slider', {
    pagination: {
      el: '.water-analysis-smart__pagination',
      dynamicBullets: true,
    },
    navigation: {
      nextEl: '.water-analysis-smart__next',
      disabledClass: '.none',
    },
    on: {
      click: () => {
        if (waterSwiper.isEnd){
      }
      },
      slideChange: () => {
        switch (waterSwiper.activeIndex) {
          case 0:
            waterSwiperNextBtn.textContent = 'Далее';
            break;
          case 1:
            waterSwiperNextBtn.textContent = 'Далее';
            break;
          case 2:
            waterSwiperNextBtn.textContent = 'Сохранить инструкцию';
            break;
          default:
            break;
        }
      },
    },
  });
}

function main() {
  if (window.screen.width < 450) {
    setSmartPhoneScript();
  }
}
main();
