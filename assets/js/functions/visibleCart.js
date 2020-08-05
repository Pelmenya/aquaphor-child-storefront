function main() {
  const cart = document.querySelector('.header__basket-container');
  const cartPopup = document.querySelector('.header__basket-popup');

  cart.addEventListener('mouseover', () => {
    if (cartPopup.firstElementChild) {
      cartPopup.style.display = 'block';
      if (cartPopup.querySelector('p.woocommerce-mini-cart__empty-message')) {
        cartPopup.style.display = 'none';
      }
    }
  });

  cart.addEventListener('mouseout', () => {
    cartPopup.style.display = 'none';
  });
}

main();
