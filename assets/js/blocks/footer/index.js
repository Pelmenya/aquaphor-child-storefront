function setFooterSmartScript(footer) {
  const buttons = footer.querySelectorAll('.footer-smart__item');

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

      const openPopupOneClick = () => {
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

  function setColorActiveItem(item) {
    item.querySelector('.footer-smart__icon').classList.add('footer-smart__icon_active');
    item.querySelector('.footer-smart__text').classList.add('footer-smart__text_active');
  }

  function removeColorActiveItem(item) {
    item.querySelector('.footer-smart__icon').classList.remove('footer-smart__icon_active');
    item.querySelector('.footer-smart__text').classList.remove('footer-smart__text_active');
  }

  function openPopupMore(popup, content) {
    popup.classList.add('popup_is-opened');
    setTimeout(() => {
      content.classList.remove('popup-more-smart-phone__content_is-closed');
    }, 0);
  }

  function closePopupMore(event) {
    if (
      event.target.classList.contains('popup')
      || event.target.classList.contains('popup-more-smart-phone__close')
    ) {
      popupMoreContent.classList.add('popup-more-smart-phone__content_is-closed');
      popupHelpContent.classList.add('popup-more-smart-phone__content_is-closed');
      Object.keys(buttons).forEach((btn) => {
        removeColorActiveItem(buttons[btn]);
      });

      setTimeout(() => {
        popupMore.classList.remove('popup_is-opened');
        popupHelp.classList.remove('popup_is-opened');
      }, 350);
    }
  }

  Object.keys(buttons).forEach((item) => {
    buttons[item].addEventListener('click', () => {
      setColorActiveItem(buttons[item]);
      Object.keys(buttons).forEach((btn) => {
        if (item !== btn) removeColorActiveItem(buttons[btn]);
      });
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
