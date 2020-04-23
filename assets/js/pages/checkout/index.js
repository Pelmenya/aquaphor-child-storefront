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

  /**
   *  Ссылка на меню активная
   */

  const woocommerceBilling = document.querySelector('.woocommerce-billing-fields');

  if (woocommerceBilling) {
    const woocommerceBillingLabels = woocommerceBilling.querySelectorAll('label');
    const h3 = woocommerceBilling.querySelector('.woocommerce-billing-fields h3');
    h3.textContent = 'Адрес доставки';

    const orderCommentsField = document.querySelector('#order_comments_field');
    const header = createElementDOM('h3', '', 'Дополнительная информация');
    orderCommentsField.prepend(header);

    Object.keys(woocommerceBillingLabels).forEach((item) => {
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
        woocommerceBillingLabels[item].textContent = 'Район';
      }
      if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_city') {
        woocommerceBillingLabels[item].textContent = 'Город';
      }
      if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_address_1') {
        woocommerceBillingLabels[item].textContent = 'Улица';
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
    });
  }
}

main();
