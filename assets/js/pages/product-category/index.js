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

function main() {
  const contentArea = document.querySelector('.content-area');
  const siteMain = document.querySelector('.site-main');

  // выключил нижнюю сортировку
  if (Number(window.screen.width) < 620) {
    document.querySelectorAll('.storefront-sorting')[0].style.display = 'none';
  } else {
    document.querySelectorAll('.storefront-sorting')[1].style.display = 'none';
  }
  if (siteMain) {
    contentArea.style.marginTop = '52px';

    const headerSort = createElementDOM('div', 'header-sort');
    siteMain.prepend(headerSort);

    const header = siteMain.querySelector('.woocommerce-products-header');
    const headerH1 = siteMain.querySelector('.woocommerce-products-header__title.page-title');
    const sortingSelectForm = siteMain.querySelector('.woocommerce-ordering');

    header.style.padding = '0';
    headerH1.style.fontSize = '30px';
    headerH1.style.padding = '0';
    headerH1.style.fontFamily = 'Proxima Nova Rg';
    headerH1.style.fontWeight = 'bold';
    headerH1.style.color = '#223c52';

    const addToCartBtns = document.querySelectorAll(
      '.button.product_type_simple.add_to_cart_button.ajax_add_to_cart'
    );
    if (addToCartBtns) {
      Object.keys(addToCartBtns).forEach((i) => {
        addToCartBtns[i].textContent = 'Добавить в корзину';
      });
      headerSort.appendChild(header);
      headerSort.appendChild(sortingSelectForm);
    }
  }
}

main();
