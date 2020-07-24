function createElementDOM(
  element,
  classElement,
  textContent = '',
  styleElement = '',
  datetime = ''
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
  h1.textContent = 'Оформление';
  const entryContent = document.querySelector('.entry-content');

  /**
   *  Ссылка на меню активная
   */

  const woocommerceBilling = document.querySelector('.woocommerce-billing-fields');

  if (woocommerceBilling) {
    const woocommerceBillingLabels = document.querySelectorAll('label');
    const shopTable = document.querySelector('.shop_table.woocommerce-checkout-review-order-table');
    entryContent.prepend(shopTable);
    entryContent.prepend(h1);

    const orderCommentsPlaceholder = document.querySelector('#order_comments');
    orderCommentsPlaceholder.attributes.placeholder.nodeValue = 'Напишите комментарий к заказу';

    const h3 = woocommerceBilling.querySelector('.woocommerce-billing-fields h3');
    h3.textContent = 'Адрес доставки';

    const orderCommentsField = document.querySelector('#order_comments_field');

    // город и улица
    /*
    const adressBlock = createElementDOM('div', 'checkout-inputs');
    const billingCity = document.querySelector('#billing_city_field');
    const billingAdress = document.querySelector('#billing_address_1_field');
    adressBlock.appendChild(billingCity);
    adressBlock.appendChild(billingAdress);
    woocommerceBilling.appendChild(adressBlock);
    // adressBlock.classList.add('checkout-inputs_adress');
    */

    // тел и email
    const telEmailBlock = createElementDOM('div', 'checkout-inputs');
    const telephone = document.querySelector('#billing_phone_field');
    const email = document.querySelector('#billing_email_field');
    telEmailBlock.appendChild(telephone);
    telEmailBlock.appendChild(email);

    woocommerceBilling.appendChild(telEmailBlock);

    // Достаем метод доставки
    const shipingWrapper = entryContent.querySelector('ul#shipping_method');
    orderCommentsField.appendChild(shipingWrapper);
    // Доставки
    const shipings = shipingWrapper.querySelectorAll('li');
    if (shipings) {
      const header = createElementDOM('h3', 'shiping-head', 'Доставка');
      const billingWooccm12 = entryContent.querySelector('#billing_wooccm12');
      const adressShipping = entryContent.querySelector('#billing_address_1');
      shipingWrapper.prepend(billingWooccm12);
      shipingWrapper.prepend(shipings[1]);
      shipingWrapper.prepend(adressShipping);
      shipingWrapper.prepend(shipings[0]);
      shipingWrapper.prepend(header);
    }

    const orderSumma = shopTable.querySelector('tfoot').querySelector('.order-total');
    entryContent.querySelector('#order_review').prepend(orderSumma);

    Object.keys(woocommerceBillingLabels).forEach((item) => {
      if (woocommerceBillingLabels[item].attributes.for) {
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_first_name') {
          woocommerceBillingLabels[item].textContent = 'Имя';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_last_name') {
          woocommerceBillingLabels[item].textContent = 'Фамилия';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_wooccm11') {
          woocommerceBillingLabels[item].textContent = 'Отчество';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_wooccm12') {
          woocommerceBillingLabels[item].textContent = '';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_city') {
          woocommerceBillingLabels[item].textContent = 'Город';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_address_1') {
          woocommerceBillingLabels[item].textContent = '';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_postcode') {
          woocommerceBillingLabels[item].textContent = 'Индекс';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_phone') {
          woocommerceBillingLabels[item].textContent = 'Телефон';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_email') {
          woocommerceBillingLabels[item].textContent = 'Эл. почта';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_country') {
          woocommerceBillingLabels[item].textContent = '';
        }
        if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'order_comments') {
          woocommerceBillingLabels[item].textContent = '';
        }
        if (
          woocommerceBillingLabels[item].attributes.for.nodeValue === 'shipping_method_0_flat_rate4'
        ) {
          woocommerceBillingLabels[item].textContent = 'Доставка курьером - 400 руб.';
        }
      }
    });
  }
}

main();
