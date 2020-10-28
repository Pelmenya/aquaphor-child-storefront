function setCurrencySymbol() {
  const currencySymbols = document.querySelectorAll('.woocommerce-Price-currencySymbol');
  if (currencySymbols) {
    Object.keys(currencySymbols).forEach((item) => {
      currencySymbols[item].textContent = currencySymbols[item].textContent.replace(/₽/g, ' руб.');
    });
  }
}

function refreshCart() {
  setCurrencySymbol();
}

/** jQuery нужен для отслеживания обновления корзины */
jQuery(document.body).on('updated_cart_totals', () => refreshCart());
jQuery(document.body).on('applied_coupon', () => refreshCart());

setCurrencySymbol();
