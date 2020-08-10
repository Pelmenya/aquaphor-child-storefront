function createElementDOM(
  element,
  classElement,
  textContent = '',
  styleElement = '',
  datetime = '',
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

function main() {
  // Заголовок
  const h1 = document.querySelector('.entry-title');
  /**
   *  Ссылка на меню активная
   */
  const entryWoocommerce = document.querySelector('.entry-content .woocommerce');
  if (Number(window.screen.width) > 1150) {
    entryWoocommerce.style.display = 'flex';
    entryWoocommerce.style.width = '100%';
  } else {
    entryWoocommerce.style.display = 'flex';
    entryWoocommerce.style.flexDirection = 'column';
    const nav = entryWoocommerce.querySelector('nav.woocommerce-MyAccount-navigation');
    nav.style.flexBasis = ' initial';
    nav.style.marginRight = '0px';
  }
  const activeLinkMenu = document.querySelector('.is-active');
  activeLinkMenu.style.backgroundColor = 'var(--blue-blue)';

  activeLinkMenu.firstElementChild.textContent = 'Адрес';
  activeLinkMenu.firstElementChild.style.color = '#fff';

  const contentConainer = document.querySelector('.woocommerce-MyAccount-content');
  const contentAddressTitle = document.querySelector('.woocommerce-Address-title');
  const h3 = contentAddressTitle.querySelector('h3');
  const address = contentConainer.querySelector('address');
  const pAll = contentConainer.querySelectorAll('p');

  contentConainer.style.fontSize = '16px';
  contentConainer.style.fontFamily = 'Proxima Nova Rg';
  contentConainer.style.color = 'var(--dark)';

  pAll[0].textContent = 'Этот адрес будет использоваться для доставки';
  pAll[0].style.marginBottom = '46px';

  contentAddressTitle.style.display = 'flex';

  h3.style.color = 'var(--blue-blue)';
  h3.textContent = '';
  h3.style.marginBottom = '0px';

  const span = createElementDOM('span', 'span-icon');

  contentAddressTitle.appendChild(span);


  if (address.textContent.trim() === 'Вы пока не указали этот тип адреса.') {
    address.textContent = 'Информация отсуствует';
  }

  address.style.marginTop = '19px';
  h1.textContent = 'Адрес';
}

main();
