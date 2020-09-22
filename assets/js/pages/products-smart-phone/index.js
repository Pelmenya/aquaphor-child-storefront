function main() {
  const products = document.querySelectorAll('.products-smart-phone__card');
  const reversProductsArr = Object.keys(products).map((item) => products[item]);
  const productsContainer = document.querySelector('.products-smart-phone__container');
  const productsSortButton = document.querySelector('.products-smart-phone__button');

  productsSortButton.addEventListener('click', () => {
    reversProductsArr.reverse().forEach((element) => {
      productsContainer.append(element);
    });
  });
}

main();
