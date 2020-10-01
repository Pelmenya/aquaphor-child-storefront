
function setFooterSmartScript(footer) {
  const buttons = footer.querySelectorAll('.footer-smart__item');

  function setColorActiveItem(item) {
    item.querySelector('.footer-smart__icon').classList.add('footer-smart__icon_active');
    item.querySelector('.footer-smart__text').classList.add('footer-smart__text_active');
  }

  function removeColorActiveItem(item) {
    item.querySelector('.footer-smart__icon').classList.remove('footer-smart__icon_active');
    item.querySelector('.footer-smart__text').classList.remove('footer-smart__text_active');
  }

  Object.keys(buttons).forEach((item) => {
    buttons[item].addEventListener('click', () => {
      setColorActiveItem(buttons[item]);
      Object.keys(buttons).forEach((btn) => {
        if (item !== btn) removeColorActiveItem(buttons[btn]);
      });
      switch (item) {
        case 0: window.location.href = 'discounts';
          break;
        case 1:
          break;
        case 2:
          break;
        case 3:
          break;
      };
    });
  });
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
