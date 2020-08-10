function main() {
  const cart = document.querySelector('.header__basket-container');
  const cartPopup = document.querySelector('.header__basket-popup');

  cart.addEventListener('mouseover', () => {
    if (cartPopup.firstElementChild) {
      if (Number(window.screen.width) > 680) {
        cartPopup.style.display = 'block';
        const currencySymbolS = cartPopup.querySelectorAll('span.woocommerce-Price-currencySymbol');
        Object.keys(currencySymbolS).forEach((item) => {
          currencySymbolS[item].textContent = currencySymbolS[item].textContent.replace(/₽/g, ' руб.');
        });

        if (cartPopup.querySelector('p.woocommerce-mini-cart__empty-message')) {
          cartPopup.style.display = 'none';
        }
      }
    }
  });

  cart.addEventListener('mouseout', () => {
    cartPopup.style.display = 'none';
  });
}

main();
