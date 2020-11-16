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
  return `${day} ${objMonth[Number(month) - 1]} ${year}г.`;
}

function main() {
  // Заголовок
  // const h1 = document.querySelector('.entry-title');

  /**
   *  Ссылка на меню активная
   */
  const entryWoocommerce = document.querySelector('.entry-content .woocommerce');
  entryWoocommerce.style.display = 'flex';
  entryWoocommerce.style.width = '100%';

  const activeLinkMenu = document.querySelector('.is-active');
  activeLinkMenu.style.backgroundColor = 'var(--blue-blue)';

  activeLinkMenu.firstElementChild.style.color = '#fff';

  const h1 = document.querySelector('.entry-title');
  h1.textContent = h1.textContent.replace('№', '#');

  const woocommerceMyAccountContent = document.querySelector('.woocommerce-MyAccount-content');

  if (woocommerceMyAccountContent) {
    const pS = woocommerceMyAccountContent.querySelectorAll('p');

    if (pS[0]) {
      if (window.screen.width < 450) {
        pS[0].style.display = 'none';
      } else {
        pS[0].style.fontFamily = 'Proxima Nova Rg';
        pS[0].style.fontSize = '16px';
        pS[0].style.color = 'var(--dark)';
        pS[0].style.marginBottom = '42px';
        pS[0].firstChild.textContent = pS[0].firstChild.textContent.replace('№', '#');
        pS[0].childNodes[4].textContent = ' и сейчас имеет статус ';
        const orderDate = pS[0].querySelector('.order-date');
        orderDate.textContent = dataToStrRus(orderDate.textContent);
      }
    }
  }
  const woocommerceOrderDetails = woocommerceMyAccountContent.querySelector(
    '.woocommerce-order-details',
  );
  if (woocommerceOrderDetails) {
    const woocommerceOrderDetailsTitle = woocommerceOrderDetails.querySelector(
      '.woocommerce-order-details__title',
    );
    woocommerceOrderDetailsTitle.textContent = 'Детали заказа';
    woocommerceOrderDetailsTitle.style.fontSize = '18px';

    const tableFooter = woocommerceOrderDetails.querySelector('tfoot');
    if (tableFooter.querySelector('.shipped_via')) {
      tableFooter.querySelector('.shipped_via').textContent = '';
    }
    const thAll = tableFooter.querySelectorAll('th');
    const tdAll = tableFooter.querySelectorAll('td');

    Object.keys(thAll).forEach((i) => {
      thAll[i].textContent = thAll[i].textContent.replace('Метод оплаты:', 'Способ оплаты:');
      if (thAll[i].textContent === 'Доставка:') {
        thAll[i].style.display = 'none';
        tdAll[i].style.display = 'none';
      }
    });
    const addressTitle = document.querySelector(
      '.woocommerce-customer-details .woocommerce-column__title',
    );

    addressTitle.textContent = 'Адрес доставки';

    const orderAgain = woocommerceOrderDetails.querySelector('.order-again');
    if (orderAgain) {
      orderAgain.querySelector('.button').textContent = 'Заказать повторно';
    }
  }
}

main();
