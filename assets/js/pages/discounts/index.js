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
  const products = document.querySelectorAll('li.product.type-product');
  if (products) {
    Object.keys(products).forEach((item) => {
      products[item].appendChild(createElementDOM('div', 'discounts', 'Скидка!'));
    });
  }
}

main();
