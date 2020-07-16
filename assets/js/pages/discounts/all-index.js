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

function createDiscount() {
  const woocommerceProductGalleryWrapper = document.querySelector(
    'figure.woocommerce-product-gallery__wrapper',
  );
  if (woocommerceProductGalleryWrapper) {
    woocommerceProductGalleryWrapper.appendChild(createElementDOM('div', 'discounts', 'Скидка!'));
  }
}

function main() {
  const productBigDiv = document.querySelector('.summary.entry-summary');
  if (productBigDiv) {
    const bigDiscountLabel = productBigDiv.querySelector('.price');
    if (bigDiscountLabel) {
      if (
        bigDiscountLabel.firstChild.tagName === 'DEL'
        && bigDiscountLabel.lastChild.tagName === 'INS'
      ) {
        createDiscount();
      }
    }
  }
  const products = document.querySelectorAll('li.product.type-product');
  if (products) {
    Object.keys(products).forEach((item) => {
      const smallDiscountLabel = products[item].querySelector('.price');
      if (smallDiscountLabel) {
        if (
          smallDiscountLabel.firstChild.tagName === 'DEL'
          && smallDiscountLabel.lastChild.tagName === 'INS'
        ) {
          products[item].appendChild(createElementDOM('div', 'discounts', 'Скидка!'));
        }
      }
    });
  }
}

main();
