function setFooterSmartScript(footer) {
  const paramsString = document.location.search;
  // const searchParams = new URLSearchParams(paramsString);
  const buttons = footer.querySelectorAll('.footer-smart__item');
  const catologColor = footer.querySelector('.footer-smart__item_catalog');
  const discountsColor = footer.querySelector('.footer-smart__item_discounts');

  const catalogAdress = '?slug=catalog';
  const discountsAdress = '?slug=discounts';

  const popups = document.querySelectorAll('.popup');
  const popupMore = document.querySelector('.popup-more-smart-phone');
  const popupMoreContent = popupMore.querySelector('.popup-more-smart-phone__content');

  const popupHelp = document.querySelector('.popup-help-smart-phone');
  const popupHelpContent = popupHelp.querySelector('.popup-more-smart-phone__content');

  const popupOneClickSmartPhone = document.querySelector('.popup-oneclick-smart-phone');

  if (popupOneClickSmartPhone) {
    const popupOneClickContent = popupOneClickSmartPhone.querySelector(
      '.popup-more-smart-phone__content',
    );
    const oneCLickButtonSmartPhone = document.querySelector(
      '.product-smart-phone__button-one-click',
    );
    const minusBtn = popupOneClickSmartPhone.querySelector('button.minus');
    const plusBtn = popupOneClickSmartPhone.querySelector('button.plus');

    const counterInput = popupOneClickSmartPhone.querySelector(
      '.cart-smart-phone__counter_one-click',
    );

    const priceLabel = popupOneClickSmartPhone.querySelector('.cart-smart-phone__price');
    if (priceLabel) {
      const priceOneProduct = Number(priceLabel.textContent.replace('руб.', '').trim());

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

      const openPopupOneClick = (e) => {
        e.preventDefault();
        popupOneClickSmartPhone.classList.add('popup_is-opened');
        setTimeout(() => {
          popupOneClickContent.classList.remove('popup-more-smart-phone__content_is-closed');
        }, 0);

        minusBtn.addEventListener('click', minusBtnClick);
        plusBtn.addEventListener('click', plusBtnClick);
      };

      const closePopupOneClick = (event) => {
        if (
          event.target.classList.contains('popup') || event.target.classList.contains('popup-more-smart-phone__close')
        ) {
          minusBtn.addEventListener('click', minusBtnClick);
          plusBtn.addEventListener('click', plusBtnClick);

          popupOneClickContent.classList.add('popup-more-smart-phone__content_is-closed');

          setTimeout(() => {
            popupOneClickSmartPhone.classList.remove('popup_is-opened');
          }, 350);
        }
      };

      oneCLickButtonSmartPhone.addEventListener('click', openPopupOneClick);
      window.addEventListener('mousedown', closePopupOneClick);
    }
  }
  function deleteColor() {
    if (paramsString === catalogAdress) {
      catologColor.classList.remove('footer-smart__item_catalog_active');
      catologColor.nextElementSibling.classList.remove('footer-smart__text_active');
    }
    if (paramsString === discountsAdress) {
      discountsColor.classList.remove('footer-smart__item_discounts_active');
      discountsColor.nextElementSibling.classList.remove('footer-smart__text_active');
    }
  }
  function addColor() {
    if (paramsString === catalogAdress) {
      catologColor.classList.add('footer-smart__item_catalog_active');
      catologColor.nextElementSibling.classList.add('footer-smart__text_active');
    }
    if (paramsString === discountsAdress) {
      discountsColor.classList.add('footer-smart__item_discounts_active');
      discountsColor.nextElementSibling.classList.add('footer-smart__text_active');
    }
  }

  function setColorActiveItem(item) {
    if (item.children[0].classList.contains('footer-smart__item_helpImg')) {
      item.children[0].classList.add('footer-smart__item_helpImg_active');
      item.children[1].classList.add('footer-smart__text_active');
      deleteColor();
    }
    if (item.children[0].classList.contains('footer-smart__item_moreImg')) {
      item.children[0].classList.add('footer-smart__item_moreImg_active');
      item.children[1].classList.add('footer-smart__text_active');
      deleteColor();
    }
  }

  function removeColorActiveItem(item) {
    if (item.children[0].classList.contains('footer-smart__item_helpImg')) {
      item.children[0].classList.remove('footer-smart__item_helpImg_active');
      item.children[1].classList.remove('footer-smart__text_active');
      addColor();
    }
    if (item.children[0].classList.contains('footer-smart__item_moreImg')) {
      item.children[0].classList.remove('footer-smart__item_moreImg_active');
      item.children[1].classList.remove('footer-smart__text_active');
      addColor();
    }
  }

  function openPopupMore(popup, content) {
    popup.classList.add('popup_is-opened');
    Object.keys(popups).forEach((i) => {
      popups[i].classList.remove('close-overlay');
      popups[i].classList.add('add-overlay');
    });
    popupMoreContent.classList.add('open-popup');
    popupHelpContent.classList.add('open-popup');
    document.body.style.overflow = 'hidden';
    setTimeout(() => {
      content.classList.remove('popup-more-smart-phone__content_is-closed');
    }, 0);
  }

  function closePopupMore(event) {
    Object.keys(popups).forEach((i) => {
      // popups[i].classList.remove('add-overlay');
      popups[i].classList.add('close-overlay');
    });
    if (
      event.target.classList.contains('popup')
      || event.target.classList.contains('popup-more-smart-phone__close')
    ) {
      popupMoreContent.classList.remove('open-popup');
      popupHelpContent.classList.remove('open-popup');
      popupHelpContent.classList.add('open-popup');
      popupMoreContent.classList.add('close-popup');
      popupMoreContent.style.animation = 'close-popup linear 0.2s';
      popupHelpContent.style.animation = 'close-popup linear 0.2s';
      document.body.style.overflow = 'auto';
      popupMoreContent.classList.add('popup-more-smart-phone__content_is-closed');
      popupHelpContent.classList.add('popup-more-smart-phone__content_is-closed');
      Object.keys(buttons).forEach((btn) => {
        removeColorActiveItem(buttons[btn]);
      });

      setTimeout(() => {
        popupHelpContent.classList.remove('close-popup');
        popupHelpContent.classList.add('open-popup');
        popupMoreContent.classList.remove('close-popup');
        popupMoreContent.classList.add('open-popup');
        popupMore.classList.remove('popup_is-opened');
        popupHelp.classList.remove('popup_is-opened');
        popupMoreContent.style.animation = 'open-popup linear 0.2s';
        popupHelpContent.style.animation = 'open-popup linear 0.2s';
      }, 200);
    }
  }

  Object.keys(buttons).forEach((item) => {
    buttons[item].addEventListener('click', () => {
      setColorActiveItem(buttons[item]);
      Object.keys(buttons).forEach((btn) => {
        if (btn === 2 || btn === 3) setColorActiveItem(buttons[btn]);
        Object.keys(popups).forEach((popup) => {
          if (popups[popup].classList.contains('popup_is-opened')) popups[popup].classList.remove('popup_is-opened');
          if (item !== btn) removeColorActiveItem(buttons[btn]);
        });
      });
      setColorActiveItem(buttons[item]);
      if (buttons[item].classList.contains('footer-smart__item_more')) openPopupMore(popupMore, popupMoreContent);
      if (buttons[item].classList.contains('footer-smart__item_help')) openPopupMore(popupHelp, popupHelpContent);
    });
  });

  window.addEventListener('mousedown', closePopupMore);
}

function main() {
  const footer = document.querySelector('.footer');
  const wrapSubCategorys = footer.querySelectorAll('.footer__category-wrap_row');
  Object.keys(wrapSubCategorys).forEach((item) => {
    wrapSubCategorys[item].addEventListener('click', () => {
      wrapSubCategorys[item].parentNode.lastElementChild.classList.toggle(
        'footer__category-wrap_is-opened',
      );
      const svg = wrapSubCategorys[item].querySelector(
        'svg.footer__item-icon.footer__item-icon_rotating',
      );
      if (svg.style.transform === '') {
        svg.style.transform = 'rotate(180deg)';
      } else svg.style.transform = '';
    });
  });
}

if (window.screen.width < 450) {
  const footerSmart = document.querySelector('.footer-smart');
  if (footerSmart) setFooterSmartScript(footerSmart);
}

main();
