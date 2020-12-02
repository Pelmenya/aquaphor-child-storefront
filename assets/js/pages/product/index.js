/* eslint-disable no-new */
function createElementDOM(
  element,
  classElement,
  textContent = '',
  styleElement = '',
  datetime = ''
) {
  const newElement = document.createElement(element);
  newElement.className = classElement;
  if (textContent !== '') {
    newElement.textContent = textContent;
  }
  if (styleElement !== '') {
    newElement.style = styleElement;
  }
  if (datetime !== '') {
    newElement.dateTime = datetime;
  }
  return newElement;
}

function setSmartPhoneScript() {
  const headerDescriptionTitle = document.querySelector('.header__smart-phone-description-title');
  const mainProductSmartPhone = document.querySelector('.main-product-smart-phone');
  const headerSmartPhone = document.querySelector('.header_smart-phone');
  const footerSmartPhone = document.querySelector('.footer-smart');
  const addToCartBtn = mainProductSmartPhone.querySelector(
    '.product-smart-phone__button-add-to-card'
  );
  const productSmartPhoneDescriptionBtn = mainProductSmartPhone.querySelector(
    '.product-smart-phone__button-description'
  );
  const headerPrevPageButton = headerSmartPhone.querySelector('.header__prev-page-button');
  const headerPrevPageButtonDescription = headerSmartPhone.querySelector(
    '.header__prev-page-button_description'
  );
  const productSmartPhone = mainProductSmartPhone.querySelector('.product-smart-phone');
  const sliderSmartPhone = mainProductSmartPhone.querySelector('.slider-product-smart-phone');
  const headerLogo = headerSmartPhone.querySelector('.header__logo');
  const headerCartButton = headerSmartPhone.querySelector('.header__cart-button');
  const productSmartPhoneDescription = mainProductSmartPhone.querySelector(
    '.product-smart-phone-description'
  );
  const priceLabel = mainProductSmartPhone.querySelector('.product-smart-phone__price');
  if (priceLabel) {
    const counterInput = mainProductSmartPhone.querySelector('.input-text.qty.text');
    const plusBtn = mainProductSmartPhone.querySelector('.plus');
    const minusBtn = mainProductSmartPhone.querySelector('.minus');

    const priceOneProduct = Number(priceLabel.textContent.replace('руб.', '').trim());

    const picturesSlider = new Swiper('.product-pictures', {
      pagination: {
        el: '.product-pictures__pagination',
        dynamicBullets: true,
      },
    });

    const minusBtnClick = () => {
      if (Number(counterInput.value > 1)) {
        counterInput.value = String(Number(counterInput.value) - 1);
        priceLabel.textContent = `${priceOneProduct * Number(counterInput.value)}  руб.`;
      } else counterInput.value = 1;
    };

    const plusBtnClick = () => {
      counterInput.value = String(Number(counterInput.value) + 1);
      priceLabel.textContent = `${priceOneProduct * Number(counterInput.value)}  руб.`;
    };
    minusBtn.addEventListener('click', minusBtnClick);
    plusBtn.addEventListener('click', plusBtnClick);
  }

  function toggleDescriptionProduct() {
    productSmartPhoneDescription.classList.toggle('is-close');
    headerPrevPageButton.classList.toggle('is-close');
    headerPrevPageButtonDescription.classList.toggle('is-close');
    headerDescriptionTitle.classList.toggle('is-close');
    productSmartPhone.classList.toggle('is-close');
    sliderSmartPhone.classList.toggle('is-close');
    headerLogo.classList.toggle('is-close');
    headerCartButton.classList.toggle('is-close');
    footerSmartPhone.classList.toggle('is-close');
  }

  headerPrevPageButton.addEventListener('click', () => {
    window.history.back();
  });

  headerPrevPageButtonDescription.addEventListener('click', () => {
    toggleDescriptionProduct();
  });

  if (mainProductSmartPhone) {
    // eslint-disable-next-line no-undef
    new Swiper('.slider-product-smart-phone__container', {
      speed: 400,
      spaceBetween: 15,
    });
    if (addToCartBtn) {
      addToCartBtn.textContent = 'Отложить';
    }
    if (productSmartPhoneDescriptionBtn) {
      productSmartPhoneDescriptionBtn.addEventListener('click', () => {
        toggleDescriptionProduct();
      });
    }
  }
}

function main() {
  const contentArea = document.querySelector('.content-area');
  const popUp = document.querySelector('.popup.popup-oneclick');
  const popUpCloseBtn = popUp.querySelector('.popup__close');

  popUpCloseBtn.addEventListener('click', () => {
    popUp.classList.remove('popup_is-opened');
  });

  window.addEventListener('mousedown', (event) => {
    if (event.target.classList.contains('popup')) {
      popUp.classList.remove('popup_is-opened');
    }
  });

  window.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      popUp.classList.remove('popup_is-opened');
    }
  });

  if (contentArea) {
    contentArea.style.marginTop = '84px';
    // popUp с картинкой
    const pswp = document.querySelector('.pswp');
    if (pswp) {
      pswp.style.display = 'none';
    }
    const imgWrapper = document.querySelector('.woocommerce-product-gallery__wrapper');
    if (imgWrapper) {
      imgWrapper.addEventListener('mouseover', () => {
        const img = imgWrapper.querySelector('img.zoomImg');
        img.style.visibility = 'hidden';
      });
    }

    const entrySummary = contentArea.querySelector('.entry-summary');
    entrySummary.querySelector('.woocommerce-Price-amount').style.fontFamily = 'Proxima Nova Rg';
    const shortDescription = entrySummary.querySelector(
      '.woocommerce-product-details__short-description'
    );

    if (shortDescription) {
      const shortDescriptionP = shortDescription.querySelector('p');

      shortDescriptionP.style.fontFamily = 'Proxima Nova Rg';
      shortDescriptionP.style.fontSize = '16px';
      shortDescriptionP.style.color = 'var(--dark)';
    }
    const formCart = entrySummary.querySelector('.cart');

    const checkCount = formCart.querySelector('.quantity');
    checkCount.style.display = 'none';

    const singleAddToCartButton = formCart.querySelector('.single_add_to_cart_button');
    singleAddToCartButton.style.marginTop = '10px';
    singleAddToCartButton.style.marginRight = '10px';
    singleAddToCartButton.style.color = '#fff';
    singleAddToCartButton.style.width = '180px';
    singleAddToCartButton.style.fontSize = '13px';
    singleAddToCartButton.style.height = '50px';
    singleAddToCartButton.textContent = 'Добавить в корзину';

    // добавляю кнопку в один клик

    const oneClickBtn = createElementDOM('button', 'single_add_to_cart_button button');
    oneClickBtn.style.color = '#000';
    oneClickBtn.style.width = '180px';
    oneClickBtn.style.fontSize = '13px';
    oneClickBtn.style.fontFamily = 'Proxima Nova Rg';
    oneClickBtn.style.height = '50px';
    oneClickBtn.textContent = 'Купить в 1 клик';
    formCart.appendChild(oneClickBtn);

    oneClickBtn.addEventListener('click', (event) => {
      document.querySelector('.popup-oneclick').classList.add('popup_is-opened');
      event.preventDefault();
    });

    const relatedProducts = document.querySelector('.related.products');
    if (relatedProducts) {
      const relatedProductsButtons = relatedProducts.querySelectorAll(
        '.button.product_type_simple.add_to_cart_button.ajax_add_to_cart'
      );
      Object.keys(relatedProductsButtons).forEach((i) => {
        relatedProductsButtons[i].textContent = 'Добавить в корзину';
      });
    }
    const tabTitleAdditionalInformation = document.querySelector(
      '#tab-title-additional_information a'
    );
    if (tabTitleAdditionalInformation) {
      tabTitleAdditionalInformation.textContent = 'Тех. характеристики';
      const tabAdditionalInformation = document.querySelector('#tab-additional_information');
      tabAdditionalInformation.querySelector('h2').textContent = 'Тех. характеристики';
    }
  }
  if (window.screen.width < 450) {
    setSmartPhoneScript();
  }
}

main();
