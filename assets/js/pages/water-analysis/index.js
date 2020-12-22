function setSmartPhoneScript() {
  const selectSity = document.querySelector('select[name="list-sourse"]');
  const wrapperCheckBox = document.querySelector('.wrapper-water-analysis_points-sale');
  const waterSwiperNextBtn = document.querySelector('.water-analysis-smart__next');

  selectSity.addEventListener('change', (event) => {
    console.log(event.target.value);
    // eslint-disable-next-line default-case
    switch (+event.target.value) {
      case 0:
        wrapperCheckBox.innerHTML= " ";
        wrapperCheckBox.insertAdjacentHTML('afterbegin',
        `<div class="radio">
        <input type="radio" name="points-sale" value = "1-1" id="c1">
        <label for="c1">
          <span class="points-sale__time">ТЦ Курс, 10:00 - 20:00</span>
          <span class="points-sale__adress">пр-т. Победы, д. 63</span>
        </label>
        </div>
      
        <div class="radio">
           <input type="radio" name="points-sale" value = "1-2" id="c2">
          <label for="c2">
          <span class="points-sale__time">ТЦ Ока, 10:00 - 20:00</span>
          <span class="points-sale__adress">ул. Горького, д. 26</span>
          </label>
        </div>`);
        break;
      case 1:
        waterSwiperNextBtn.textContent = 'Далее';
        break;
      case 2:
        waterSwiperNextBtn.textContent = 'Сохранить инструкцию';
        break;
    }
  });

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
