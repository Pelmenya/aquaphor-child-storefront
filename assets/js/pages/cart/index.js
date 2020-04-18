function amountNormalize(str) {
  const arr = str.split('.');
  arr.splice(arr.length - 1, 1);
  return `${arr.join(' ')} руб.`;
}

function refreshCart() {
  const amounts = document.querySelectorAll('.amount');
  Object.keys(amounts).forEach((i) => {
    amounts[i].textContent = amountNormalize(amounts[i].textContent);
  });
}

/** jQuery нужен для отслеживания обновления корзины */
jQuery(document.body).on('updated_cart_totals', () => refreshCart());
jQuery(document.body).on('applied_coupon', () => refreshCart());

refreshCart();
