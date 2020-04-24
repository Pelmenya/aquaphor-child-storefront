function dataToStrRus(str) {
  const strObj = str.split('.');
  /* const date = new Date(str.split('-'))
     const year = date.getFullYear(date);
     const month = date.getMonth(date);
     const day = date.getDate(date);
  срабатывает в браузерах  Google, Opera, FireFox и в других,
  но не работает в Safari, EDGE.
   */
  const day = strObj[0];
  const month = strObj[1];
  const year = strObj[2];
  const objMonth = [
    'января',
    'февраля',
    'марта',
    'апреля',
    'мая',
    'июня',
    'июля',
    'августа',
    'сентября',
    'октября',
    'ноября',
    'декабря',
  ];
  return `${day} ${objMonth[Number(month) - 1]}, ${year}`;
}

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
  // Заголовок
  const h1 = document.querySelector('.entry-title');
  h1.textContent = 'Заказ оформлен';
  const woocomerceOrder = document.querySelector('.woocommerce-order');
  if (woocomerceOrder) {
    woocomerceOrder.querySelector(
      '.woocommerce-notice.woocommerce-notice--success.woocommerce-thankyou-order-received',
    ).textContent = 'Спасибо! Ваш заказ успешно оформлен';
    const tableUl = woocomerceOrder.querySelector(
      '.woocommerce-order-overview.woocommerce-thankyou-order-details.order_details',
    );

    const order = tableUl.querySelector('.order');
    order.firstChild.textContent = '';

    const spaceDiv = createElementDOM('div', 'space-div', 'Заказ #');
    order.prepend(spaceDiv);

    const date = tableUl.querySelector('.date');
    date.firstChild.textContent = '';
    const dateDiv = createElementDOM('div', 'name-div', 'Дата');
    date.prepend(dateDiv);
    date.querySelector('strong').textContent = dataToStrRus(date.querySelector('strong').textContent);

    const email = tableUl.querySelector('.email');
    email.firstChild.textContent = '';
    const emailDiv = createElementDOM('div', 'name-div', 'Эл. почта');
    email.prepend(emailDiv);

    const total = tableUl.querySelector('.total');
    total.firstChild.textContent = '';
    const totalDiv = createElementDOM('div', 'name-div', 'Сумма');
    total.prepend(totalDiv);

    const method = tableUl.querySelector('.method');
    method.firstChild.textContent = '';
    const methodDiv = createElementDOM('div', 'name-div', 'Способ оплаты');
    method.prepend(methodDiv);
    if (woocomerceOrder.querySelectorAll('p')[1]) {
      woocomerceOrder.querySelectorAll('p')[1].style.display = 'none';
    }

    const trS = document.querySelector('tfoot').querySelectorAll('tr');
    trS[1].style.display = 'none';

    document.querySelector('.woocommerce-order-details__title').textContent = 'Детали заказа';
    document.querySelector('.woocommerce-column__title').textContent = 'Адрес доставки';
  }
}

main();
