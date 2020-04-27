function amountNormalize(str) {
  if (!str.match('руб.')) {
    const arr = str.split('.');
    arr.splice(arr.length - 1, 1);
    return `${arr.join(' ')} руб.`;
  }
  return str;
}

function main() {
  const cart = document.querySelector('.header__basket-container');
  const cartPopup = document.querySelector('.header__basket-popup');

  cart.addEventListener('mouseover', () => {
    if (cartPopup.firstElementChild) {
      cartPopup.style.display = 'block';
      const amounts = cartPopup.querySelectorAll('.amount');
      Object.keys(amounts).forEach((i) => {
        amounts[i].textContent = amountNormalize(amounts[i].textContent);
      });
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
