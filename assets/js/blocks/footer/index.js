function setFooterSmartScript(footer) {
  const buttons = footer.querySelectorAll('.footer-smart__item');
  const popupMore = document.querySelector('.popup-more-smart-phone');
  const popupMoreContent = popupMore.querySelector('.popup-more-smart-phone__content');

  function setColorActiveItem(item) {
    item.querySelector('.footer-smart__icon').classList.add('footer-smart__icon_active');
    item.querySelector('.footer-smart__text').classList.add('footer-smart__text_active');
  }

  function removeColorActiveItem(item) {
    item.querySelector('.footer-smart__icon').classList.remove('footer-smart__icon_active');
    item.querySelector('.footer-smart__text').classList.remove('footer-smart__text_active');
  }

  let flagOpen = false;

  function openPopup(event) {
    flagOpen = !flagOpen;
    if (flagOpen && event.target.parentElement.classList.contains('footer-smart__item_more')) {
      popupMore.classList.add('popup_is-opened');
      setTimeout(() => {
        popupMoreContent.classList.remove('popup-more-smart-phone__content_is-closed');
      }, 0);
    }
  }

  function closePopup(event) {
    if ((!popupMoreContent.classList.contains('popup-more-smart-phone__content_is-closed'))
      && (!event.target.classList.contains('popup-more-smart-phone__content'))
      && (!event.target.parentElement.classList.contains('menu-smart-phone__item'))
      && (!event.target.parentElement.classList.contains('menu-smart-phone__links-wrapper'))
      && (!event.target.classList.contains('menu-smart-phone__links-wrapper'))) {
      popupMoreContent.classList.add('popup-more-smart-phone__content_is-closed');
      setTimeout(() => {
        popupMore.classList.remove('popup_is-opened');
      }, 500);
    }
  }

  Object.keys(buttons).forEach((item) => {
    buttons[item].addEventListener('click', () => {
      setColorActiveItem(buttons[item]);
      Object.keys(buttons).forEach((btn) => {
        if (item !== btn) removeColorActiveItem(buttons[btn]);
      });
    });
  });

  // Кнопка ЕЩЁ
  window.addEventListener('click', openPopup);
  window.addEventListener('click', closePopup);
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
