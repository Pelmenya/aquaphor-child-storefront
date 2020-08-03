function amountNormalize(str) {
  if (!str.match('руб.')) {
    const arr = str.split('.');
    arr.splice(arr.length - 1, 1);
    return `${arr.join(' ')} руб.`;
  }
  return str;
}

function main() {
  const amounts = document.querySelectorAll('.amount');
  Object.keys(amounts).forEach((i) => {
    amounts[i].textContent = amountNormalize(amounts[i].textContent);
  });
  const orderSumma = document
    .querySelector('tr.order-total')
    .querySelector('span.woocommerce-Price-amount.amount').textContent;

  const totalOrderSumma = document.querySelector('.total-order-summa');

  if (totalOrderSumma) {
    totalOrderSumma.textContent = amountNormalize(orderSumma);
  }
}

/**
 * Для перерисовки контента при аякс запросах.
 * Без этого аякс срабатывает позже и перерисовывает наш контент
 * */

setInterval(main, 500);
