
const selects = document.querySelectorAll('select');
const waterSwiperNextBtn = document.querySelector('.water-analysis-smart__next');
const waterPoinsText = document.querySelector('.equipment-selection__choice-color_water-points');
const waterPoinsInput = document.querySelector('.equipment-selection__point-water');

const condition = document.querySelector('select[name=list-sourse__condition]');
// Слайдер
const waterSwiper = new Swiper('.equipment-select-smart__slider', {
  pagination: {
    el: '.equipment-selection__pagination',
    dynamicBullets: true,
  },
  
  navigation: {
    nextEl: '.water-analysis-smart__next',
    disabledClass: 'none',
  },
  observer: true,
  observerParents: true,
  observerSlideChildren: true,
  on: {
    observerUpdate: () => {
      if (waterSwiper.isEnd) {
        console.log('fffff');
      }
    },
    slideChange: () => {
      switch (waterSwiper.activeIndex) {
        case 0:
          addFooter();
          waterSwiperNextBtn.textContent = 'Далее';
          break;
        case 1:
          addFooter();
          waterSwiperNextBtn.textContent = 'Рассчитать';
          waterSwiperNextBtn.addEventListener('click', () => {
            drawresult(sortProducts());
            // window.location.href='https://aquaphor.store/equipment-selection/result';
            waterSwiper.autoplay.running
            waterSwiper.autoplay.start ();
          });

          break;
        case 2:
          deleteFooter();
          waterSwiperNextBtn.textContent = 'Результат';
          waterSwiper.autoplay.stop ();
          break;
        default:
      }
    },
  },
});

function setSmartPhoneScript() {
  // Обработчик select
  Object.keys(selects).forEach((item) => {
    selects[item].addEventListener('click', () => {
      selects[item].classList.toggle('open');
      selects[item].addEventListener('blur', () => {
        selects[item].classList.remove('open');
      });
    });
  });
}

function addInputText() {
  waterPoinsText.textContent = 'От 1 до ' + waterPoinsInput.value;
}

function deleteFooter() {
  const slide = document.querySelector('div[data-id="3"]');
  const footer = document.querySelector('.footer-checkout-smart-phone');
  if (slide) footer.style.display = 'none';
  console.log(footer);
}


function addFooter() {
  const slide1 = document.querySelector('div[data-id="1"]');
  const slide2 = document.querySelector('div[data-id="2"]');
  const footer = document.querySelector('.footer-checkout-smart-phone');
  if (slide1 || slide2) footer.style.display = 'block';
  console.log(footer);
}

// Инпуты анализа воды
function sortProducts() {
  const tdh = document.querySelector('input[name=pa_tdh]');
  const ferrum = document.querySelector('input[name=pa_ferrum]');
  const mn = document.querySelector('input[name=pa_mn]');

  // Считаем компмесированную жесткость
  const a = tdh.value * 50;
  const d = (ferrum.value + mn.value) * 75;
  let e = (a + d) / 50;
  console.log(e);

  // присваемываем  нужную компесированную жесткость
  // eslint-disable-next-line default-case
  switch (+e) {
    case e <= 12 && e > 0 ? e : true:
      e = 12;
      break;
    case e > 12 && e <= 24 ? e : true:
      e = 24;
      break;
    case e > 24 && e <= 31 ? e : true:
      e = 31;
      break;
    case e > 31 && e <= 34 ? e : true:
      e = 34;
      break;
  }

  const systems = window.systems;
  let resultIds = [];
  let resultIds1 = [];
  let resultIdsurbidity = [];
  let resultIdWaterPoint = [];
  let resultIdComparison = [];
  let itemAtr = [];
  console.log(systems);
  // console.log(e);
  systems.forEach((item) => {
    console.log(item);
    console.log(item.attributes);
    
    for (let i = item.attributes.length - 1; i >= 0; i--) {
      itemAtr = item.attributes[i];
        for (let key in itemAtr) {
          // Сравнимаем инпуты с атрибутами(Состояние воды)
          if (condition.value =='1' && itemAtr[key] == 'pa_clear_turbidity' && itemAtr[++key] =='Нет') {
            resultIdsurbidity.push(item);
            console.log("Убирать мутность не нужно");
          }
          if (condition.value =='2' && itemAtr[key] == 'pa_clear_turbidity' && itemAtr[++key] =='Да') {
            console.log("Убирать мутность нужно !!!!!!!!!!");
            resultIdsurbidity.push(item);
          }
          // Точки водозбора
          if (itemAtr[key] == 'pa_water_points') {
            console.log("ТОчки водозбора");
            if (itemAtr[++key] >= waterPoinsInput.value) {
              resultIdWaterPoint.push(item);
            }
          }
          // Компенсированная жесткость
          if (itemAtr[key] === 'pa_comparison' && e == itemAtr[++key]) {
            console.log('Нужно создавать массив' ); 
            resultIdComparison.push(item);
          }
        }
    }
  });

  if (resultIdsurbidity.length >= resultIdWaterPoint.length) {
    resultIds1 = resultIdsurbidity.filter(item => resultIdWaterPoint.includes(item));
  } else {
    resultIds1 = resultIdWaterPoint.filter(item => resultIdsurbidity.includes(item));
  }
  console.log(resultIds1);
  console.log(resultIds1.length);
  if (resultIdComparison.length >= resultIds1.length) {
    resultIds = resultIdComparison.filter(item => resultIds1.includes(item));
  } else {
    resultIds = resultIds1.filter(item => resultIdComparison.includes(item));
  }
  console.log(resultIds);
  console.log(resultIds.length);
  return (resultIds);
}

function drawresult(resultIds) {
  waterSwiper.appendSlide([
    '<div data-id="3" class="swiper-slide" data-swiper-autoplay="200"><h2>Результат подбора</h2></div>',
  ]);
  if (resultIds.length > 0) {
    waterSwiper.updateSlides ();
    resultIds.forEach((index) => {
      waterSwiper.slides[2].insertAdjacentHTML(
        'beforeEnd',
        `<a href="${index.product.slug}" class="card">
        <img src="${index.urlPic}" class="card__pic">
        <div class__wrapper-info
        <h4 class=card__title>${index.product.name}</h4>
        <p class="card__price">${index.product.price} руб.</p>
        </div>
        </a>`);
    });
  //   waterSwiper.slides[2].insertAdjacentHTML(
  //  ` <button class="equipment-selection__calculate-button results__add-to-cart-button">Добавить все в корзину</button>`);
    waterSwiper.updateSlides ();
  } else {
    waterSwiper.updateSlides ();
    waterSwiper.slides[2].insertAdjacentHTML(
      'beforeEnd',
      `<p class="equipment-selection__description equipment-selection__description_no-result">
      Неудача! К сожалению мы не смогли подобрать систему на основе ваших показателей. :(
      Вы можете <a href="<?php echo SITE_URL?>" class="equipment-selection__link">связаться со специалистом<a>, чтобы найти другой способ решения.
      </p>`);
    waterSwiper.updateSlides ();
  }
}


function main() {
  // console.log(choiceItem);
  if (window.screen.width < 450) {
    setSmartPhoneScript();
    waterPoinsInput.addEventListener('change', addInputText);
  }
  if (window.screen.width > 450) {
    // результирующий массив оборудования
    let waterSystemFull = [];
    const equipmentSelectionForm = document.querySelector('.equipment-selection__form');
    const waterPoints = equipmentSelectionForm.pa_water_points;
    const equipmentSelectionWaterPointsLabel = equipmentSelectionForm.querySelector('label.equipment-selection__choice-color_water-points');
    const equipmentSelectionCalculateBtn = equipmentSelectionForm.querySelector('.equipment-selection__calculate-button');
    // Radio button
    const paClearTurbidityRadioBtn = equipmentSelectionForm.pa_clear_turbidity;
    const choiceTasteRadioBtn = equipmentSelectionForm.choiceTaste;
    const waterSourceRadioBtn = equipmentSelectionForm.water_source;

    const equipmentSelectionTable = equipmentSelectionForm.querySelector('.equipment-selection__table');
    // Все input в таблице
    if (window.screen.width < 450) {
      const allItem = equipmentSelectionTable.querySelectorAll('.equipment-selection__choice-item');
      const allTableInputs = allItem.querySelectorAll('.equipment-selection__elem-value');

      // Сообщение о провале операции :=)
      const equipmentSelectionDescriptionNoResult = document.querySelector('.equipment-selection__description_no-result');
      const results = document.querySelector('.results');
      const addToCartAllProductsBtn = results.querySelector('.results__add-to-cart-button');
      // eslint-disable-next-line no-inner-declarations
      function renderResultSystem(systemFull) {
        const resultsContainer = document.querySelector('.results__container');
        for (let i = 0; i < 8; i += 1) {
          if (systemFull[i]) {
            resultsContainer.insertAdjacentHTML(
              'beforeend',
              `<a href="${systemFull[i].product.slug}" class="card">
              <img src="${systemFull[i].urlPic}" class="card__pic">
              <h4 class=card__title>${systemFull[i].product.name}</h4>
              <p class="card__price">${systemFull[i].product.price} руб.</p>
              </a>`);
          } else {
            resultsContainer.insertAdjacentHTML(
              'beforeend',
              `<div class="card">
              </div>
          `,
            );
          }
        }
      }

      // eslint-disable-next-line no-inner-declarations
      
      // eslint-disable-next-line no-inner-declarations
      function inputEquipmentSelectionForm() {
        equipmentSelectionCalculateBtn.disabled = true;
        let valid = true;
        if (paClearTurbidityRadioBtn.value !== '' && choiceTasteRadioBtn.value !== '') {
          // Заменяем все запятые на точки
          Object.keys(allTableInputs).forEach((index) => {
            allTableInputs[index].value = allTableInputs[index].value.replace(',', '.');
          });
          // нет ни одного такого, что пуст или не приобразуется в число
          valid = !Object.keys(allTableInputs).some(
            (index) => Number.isNaN(Number(allTableInputs[index].value)) || allTableInputs[index].value === '',
          );
        } else valid = false;
        if (valid) {
          equipmentSelectionCalculateBtn.disabled = false;
        }
      }

      // eslint-disable-next-line no-inner-declarations
      function submitEquipmentSelectionForm(event) {
        const dataForm = [];
        dataForm.push({
          name: paClearTurbidityRadioBtn[0].name,
          value: paClearTurbidityRadioBtn.value,
        });
        dataForm.push({ name: choiceTasteRadioBtn[0].name, value: choiceTasteRadioBtn.value });
        dataForm.push({ name: waterPoints.name, value: waterPoints.value });
        Object.keys(allTableInputs).forEach((index) => dataForm.push({
          name: allTableInputs[index].name,
          value: allTableInputs[index].value,
        }));
        /** проверяем все введеные в форму значения на соответствие диапазона каждого аттрибута
         * каждой системы. Затем берем только те системы, у которых все атрибуты подходят
         * под введеные значения, далее если есть системы то сортируем и ищем с наименьшей
         * стоимостью, нет выводим сообщение */
        for (let i = 0; i < window.systems.length; i += 1) {
          for (let j = 0; j < window.systems[i].attributes.length; j += 1) {
            // Если у атрибута нет мин - макс числовых значений, то пропускаем его
            if (
              !Number.isNaN(Number(window.systems[i].attributes[j][3]))
              && !Number.isNaN(Number(window.systems[i].attributes[j][4]))
            ) {
              for (let k = 2; k < dataForm.length; k += 1) {
                if (dataForm[k].name === window.systems[i].attributes[j][2]) {
                  if (
                    Number(window.systems[i].attributes[j][3] <= Number(dataForm[k].value))
                    && Number(dataForm[k].value) <= Number(window.systems[i].attributes[j][4])
                  ) {
                    if (window.systems[i].attributes[j].length > 4) {
                      window.systems[i].attributes[j][5] = true;
                    } else window.systems[i].attributes[j].push(true);
                  } else if (window.systems[i].attributes[j][5]) {
                    window.systems[i].attributes[j][5] = false;
                  } else window.systems[i].attributes[j].push(false);
                }
              }
            }
          }
        }
        const okSystems = [];
        for (let i = 0; i < window.systems.length; i += 1) {
          let valid = true;
          for (let j = 0; j < window.systems[i].attributes.length; j += 1) {
            if (window.systems[i].attributes[j].length > 4) {
              if (!window.systems[i].attributes[j][5]) {
                valid = false;
              }
            }
          }
          if (valid) {
            okSystems.push(window.systems[i]);
            window.systems[i].valid = true;
          } else window.systems[i].valid = false;
        }
        // 0 система оптимальна
        okSystems.sort((a, b) => Number(a.product.price) - Number(b.product.price));
        // рисуем систему в html
        waterSystemFull = [];
        if (okSystems.length > 0) {
          equipmentSelectionForm.style.display = 'none';
          waterSystemFull.push(window.filterCases[0]);
          if (Number(paClearTurbidityRadioBtn.value) === 1) {
            if (Number(waterSourceRadioBtn.value) === 1) {
              waterSystemFull.push(window.filters[0]);
            } else waterSystemFull.push(window.filters[1]);
            waterSystemFull.push(okSystems[0]);
            waterSystemFull.push(window.filters[0]);
            waterSystemFull.push(window.filterCases[0]);
            if (choiceTasteRadioBtn.value === '1') {
              waterSystemFull.push(window.drinkSystems[0]);
            }
            results.style.display = 'block';
            renderResultSystem(waterSystemFull);
          } else if (Number(paClearTurbidityRadioBtn.value) === 2) {
            equipmentSelectionForm.style.display = 'none';
            equipmentSelectionDescriptionNoResult.style.display = 'block';
          }
        } else {
          equipmentSelectionForm.style.display = 'none';
          equipmentSelectionDescriptionNoResult.style.display = 'block';
        }
        event.preventDefault();
      }

      // eslint-disable-next-line no-inner-declarations
      function addToCart() {
        if (waterSystemFull.length > 0) {
          Object.keys(waterSystemFull).forEach((item) => {
            const xhr = new XMLHttpRequest();
            // 1. Конфигурируем его: POST-запрос на URL '?add-to-cart'
            xhr.open('POST', `?add-to-cart=${waterSystemFull[item].product.id}`, false); // false - cинхронный запрос
            // 2. Отсылаем запрос
            xhr.send();
          });
          window.location.href = 'cart';
        }
      }

      // бегунок
      waterPoinsInput.addEventListener('change',
        waterPoinsText.textContent = waterPoinsInput.value);
      // ввод на форме
      equipmentSelectionForm.addEventListener('input', inputEquipmentSelectionForm);
      // submit формы
      equipmentSelectionForm.addEventListener('submit', submitEquipmentSelectionForm);
      // добавить все товары в корзину
      addToCartAllProductsBtn.addEventListener('click', addToCart);
    }
  }
}
main();