function setCurrencySymbol() {
  const currencySymbols = document.querySelectorAll('.woocommerce-Price-currencySymbol');
  if (currencySymbols) {
    Object.keys(currencySymbols).forEach((item) => {
      currencySymbols[item].textContent = currencySymbols[item].textContent.replace(/₽/g, ' руб.');
    });
  }
}

function main() {
  setCurrencySymbol();
  const orderSumma = document
    .querySelector('tr.order-total')
    .querySelector('span.woocommerce-Price-amount.amount').textContent;
  const totalOrderSumma = document.querySelector('.total-order-summa');
  if (totalOrderSumma) {
    totalOrderSumma.textContent = orderSumma.replace(/₽/g, ' руб.');
  }
}

/**
 * Для перерисовки контента при аякс запросах.
 * Без этого аякс срабатывает позже и перерисовывает наш контент
 * */

setInterval(main, 500);
