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
    h3.textContent = 'Контакты';

    const orderCommentsField = document.querySelector('#order_comments_field');


    // адрес, тел и email
    const address = document.querySelector('#billing_first_name');
    const telephone = document.querySelector('#billing_phone');
    const email = document.querySelector('#billing_email');
    if (window.screen.width > 450) {
      const telEmailBlock = createElementDOM('div', 'checkout-inputs');
      telEmailBlock.appendChild(telephone);
      telEmailBlock.appendChild(email);
      woocommerceBilling.appendChild(telEmailBlock);
    }

    // Достаем метод доставки
    const shipingWrapper = entryContent.querySelector('ul#shipping_method');
    orderCommentsField.appendChild(shipingWrapper);
    // Доставки
    const shipings = shipingWrapper.querySelectorAll('li');
    if (shipings) {
      const header = createElementDOM('h3', 'shiping-head', 'Доставка');

      const billingWooccm11 = entryContent.querySelector('#billing_wooccm11');
      const adressShipping = entryContent.querySelector('#billing_address_1');

      adressShipping.value = '';

      const cardDelivery = document.querySelector('.checkout-smart-phone__card_delivery');
      const cardPickup = document.querySelector('.checkout-smart-phone__card_pickup');
      const totalDelivery = document.querySelector('.checkout-smart-phone__price_delivery');
      if (window.screen.width < 450) {
        document.querySelector('div.site-content').style.height = `${window.screen.height - 58 - 65}px`;
        address.placeholder = 'Введите ФИО';
        telephone.placeholder = 'Введите телефон';
        email.placeholder = 'Введите эл. почту';

        const checkoutContainer = document.querySelector('.checkout-smart-phone');
        const contactsFields = document.querySelector('div.col-1');
        const shippingMethod = document.querySelector('div.col-2');
        const orderReview = document.querySelector('#order_review');
        const containerContactsFields = checkoutContainer.querySelector(
          '.checkout-smart-phone__stage_contacts',
        );
        const containerDeliveryFields = checkoutContainer.querySelector(
          '.checkout-smart-phone__stage_delivery',
        );
        const containerPaymentFields = checkoutContainer.querySelector(
          '.checkout-smart-phone__stage_payment',
        );
        const footerForwardBtn = document.querySelector('.footer-checkout-smart-phone__button');

        const triggersStageButtons = checkoutContainer.querySelectorAll(
          '.checkout-smart-phone__radio-btn',
        );

        const lineTriggersButtonsLeft = checkoutContainer.querySelector('.checkout-smart-phone__line_left');
        const lineTriggersButtonsRightt = checkoutContainer.querySelector('.checkout-smart-phone__line_right');


        containerContactsFields.appendChild(contactsFields);

        containerDeliveryFields.appendChild(shippingMethod);

        containerPaymentFields.appendChild(orderReview);


        // Добавляем карточки для методов оплаты, смартфоны
        const paymetMetodsInputs = containerPaymentFields.querySelectorAll('.input-radio');
        const paymentMetodsCards = containerPaymentFields.querySelectorAll('.checkout-smart-phone__card');
        const placeOrderBtn = document.querySelector('button#place_order');

        Object.keys(paymetMetodsInputs).forEach((item) => {
          paymentMetodsCards[item].appendChild(paymetMetodsInputs[item]);
          paymentMetodsCards[item].addEventListener('click', () => {
            paymetMetodsInputs[item].checked = true;
            Object.keys(paymetMetodsInputs).forEach((el) => {
              if (el !== item) paymetMetodsInputs[el].classList.add('is-hidden');
              else paymetMetodsInputs[el].classList.remove('is-hidden');
            });
          });
        });

        placeOrderBtn.style.display = 'none';
        checkoutContainer.append(placeOrderBtn);
        orderReview.style.display = 'none';

        triggersStageButtons[0].addEventListener('click', () => {
          triggersStageButtons[0].checked = true;
          triggersStageButtons[1].checked = false;
          triggersStageButtons[2].checked = false;
          adressShipping.value = '';
          containerDeliveryFields.classList.remove('checkout-smart-phone__stage_is-closed');
          containerContactsFields.classList.add('checkout-smart-phone__stage_is-closed');
          containerPaymentFields.classList.add('checkout-smart-phone__stage_is-closed');
          footerForwardBtn.textContent = 'Далее';
          lineTriggersButtonsLeft.classList.remove('checkout-smart-phone__line_blue');
          lineTriggersButtonsRightt.classList.remove('checkout-smart-phone__line_blue');
        });

        triggersStageButtons[1].addEventListener('click', () => {
          triggersStageButtons[0].checked = true;
          triggersStageButtons[1].checked = true;
          triggersStageButtons[2].checked = false;
          containerDeliveryFields.classList.add('checkout-smart-phone__stage_is-closed');
          containerContactsFields.classList.remove('checkout-smart-phone__stage_is-closed');
          containerPaymentFields.classList.add('checkout-smart-phone__stage_is-closed');
          footerForwardBtn.textContent = 'Далее';
          lineTriggersButtonsLeft.classList.add('checkout-smart-phone__line_blue');
          lineTriggersButtonsRightt.classList.remove('checkout-smart-phone__line_blue');
        });

        triggersStageButtons[2].addEventListener('click', () => {
          triggersStageButtons[0].checked = true;
          triggersStageButtons[1].checked = true;
          triggersStageButtons[2].checked = true;
          containerDeliveryFields.classList.add('checkout-smart-phone__stage_is-closed');
          containerContactsFields.classList.add('checkout-smart-phone__stage_is-closed');
          containerPaymentFields.classList.remove('checkout-smart-phone__stage_is-closed');
          footerForwardBtn.textContent = 'Оформить';
          lineTriggersButtonsLeft.classList.add('checkout-smart-phone__line_blue');
          lineTriggersButtonsRightt.classList.add('checkout-smart-phone__line_blue');
        });

        footerForwardBtn.addEventListener('click', () => {
          if (
            triggersStageButtons[0].checked
            && triggersStageButtons[1].checked === false
            && triggersStageButtons[2].checked === false
          ) {
            triggersStageButtons[1].checked = true;
            containerDeliveryFields.classList.add('checkout-smart-phone__stage_is-closed');
            containerContactsFields.classList.remove('checkout-smart-phone__stage_is-closed');
            lineTriggersButtonsLeft.classList.add('checkout-smart-phone__line_blue');
            lineTriggersButtonsRightt.classList.remove('checkout-smart-phone__line_blue');
          } else if (
            triggersStageButtons[0].checked
            && triggersStageButtons[1].checked
            && triggersStageButtons[2].checked === false
          ) {
            triggersStageButtons[1].checked = true;
            triggersStageButtons[2].checked = true;
            lineTriggersButtonsLeft.classList.add('checkout-smart-phone__line_blue');
            lineTriggersButtonsRightt.classList.add('checkout-smart-phone__line_blue');
            containerContactsFields.classList.add('checkout-smart-phone__stage_is-closed');
            containerPaymentFields.classList.remove('checkout-smart-phone__stage_is-closed');
            footerForwardBtn.textContent = 'Оформить';
          } else if (
            triggersStageButtons[0].checked
            && triggersStageButtons[1].checked
            && triggersStageButtons[2].checked
          ) {
            const deliveryRadioBtn = cardDelivery.querySelector('input.shipping_method');
            if (!deliveryRadioBtn.checked) adressShipping.value = 'Самовывоз';
            jQuery(placeOrderBtn).trigger('click');
          }
        });
      }

      if (window.screen.width > 450) {
        shipingWrapper.prepend(billingWooccm11);
        shipingWrapper.prepend(shipings[1]);
        shipingWrapper.prepend(adressShipping);
        shipingWrapper.prepend(shipings[0]);
        shipingWrapper.prepend(header);

        const delivery = shipingWrapper.querySelectorAll('.shipping_method');
        if (delivery[1].checked) {
          adressShipping.style.visibility = 'hidden';
        }
        delivery[0].addEventListener('change', () => {
          billingWooccm11.disabled = true;
          adressShipping.value = '';
          // adressShipping.style.visibility = 'visible';
        });

        delivery[1].addEventListener('change', () => {
          billingWooccm11.disabled = false;
          // adressShipping.style.visibility = 'hidden';
          adressShipping.value = 'Самовывоз';
        });

        adressShipping.addEventListener('input', () => {
          if (delivery[1].checked) {
            adressShipping.value = 'Самовывоз';
          }
        });

        shipings[0].addEventListener('click', () => {
          const event = new Event('change', { bubbles: true, cancelable: true });
          delivery[0].dispatchEvent(event);
          delivery[0].checked = 'true';
        });

        shipings[1].addEventListener('click', () => {
          const event = new Event('change', { bubbles: true, cancelable: true });
          delivery[1].dispatchEvent(event);
          delivery[1].checked = 'true';
        });
      }

      const orderSumma = document
        .querySelector('tr.order-total')
        .querySelector('span.woocommerce-Price-amount.amount').textContent;


      if (window.screen.width > 449) {
        entryContent.querySelector('#order_review').insertAdjacentHTML(
          'beforeBegin',
          `<div class='summa-container'>
          <div class='total'>Итого:</div>
          <div class='total-order-summa'>${orderSumma}</div>
        </div>`,
        );
      }

      Object.keys(woocommerceBillingLabels).forEach((item) => {
        if (woocommerceBillingLabels[item].attributes.for) {
          if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_first_name') {
            woocommerceBillingLabels[item].textContent = 'Имя';
            if (window.screen.width < 450) {
              woocommerceBillingLabels[item].textContent = '';
            }
          }
          if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_last_name') {
            woocommerceBillingLabels[item].textContent = 'Фамилия';
            if (window.screen.width < 450) {
              woocommerceBillingLabels[item].textContent = '';
            }
          }
          if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_wooccm12') {
            woocommerceBillingLabels[item].textContent = 'Отчество';
          }
          if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_wooccm11') {
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
            if (window.screen.width < 450) {
              woocommerceBillingLabels[item].textContent = '';
            }
          }
          if (woocommerceBillingLabels[item].attributes.for.nodeValue === 'billing_email') {
            woocommerceBillingLabels[item].textContent = 'Эл. почта';
            if (window.screen.width < 450) {
              woocommerceBillingLabels[item].textContent = '';
            }
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
            if (window.screen.width < 450) {
              woocommerceBillingLabels[item].classList.add('checkout-smart-phone__text');
              woocommerceBillingLabels[item].classList.add('checkout-smart-phone__text_card');

              woocommerceBillingLabels[item].style.marginBottom = '0px';
              woocommerceBillingLabels[item].textContent = 'Доставка курьером (400 руб.)';
              const cardWrap = cardDelivery.querySelector('.checkout-smart-phone__wrap');
              cardDelivery.prepend(adressShipping);
              cardDelivery.prepend(cardWrap);
              cardWrap.prepend(shipings[0].querySelector('input'));
              cardWrap.prepend(woocommerceBillingLabels[item]);
              cardDelivery.addEventListener('click', () => {
                const deliveryRadioBtn = cardDelivery.querySelector('input.shipping_method');
                const pickupRadioBtn = cardPickup.querySelector('input.shipping_method');
                deliveryRadioBtn.classList.remove('is-hidden');
                pickupRadioBtn.classList.add('is-hidden');
                deliveryRadioBtn.checked = 'true';
                adressShipping.readOnly = false;
                billingWooccm11.readOnly = true;
                totalDelivery.textContent = '400 руб.';
              });
            }
          }
          if (
            woocommerceBillingLabels[item].attributes.for.nodeValue === 'shipping_method_0_local_pickup5'
          ) {
            woocommerceBillingLabels[item].textContent = 'Самовывоз';
            if (window.screen.width < 450) {
              woocommerceBillingLabels[item].classList.add('checkout-smart-phone__text');
              woocommerceBillingLabels[item].classList.add('checkout-smart-phone__text_card');
              woocommerceBillingLabels[item].style.marginBottom = '0px';
              woocommerceBillingLabels[item].textContent = 'Пункт самовывоза (Бесплатно)';
              const cardWrap = cardPickup.querySelector('.checkout-smart-phone__wrap');
              cardPickup.prepend(billingWooccm11);
              cardPickup.prepend(cardWrap);
              const radioBtn = shipings[1].querySelector('input');
              radioBtn.classList.add('is-hidden');
              cardWrap.prepend(radioBtn);
              cardWrap.prepend(woocommerceBillingLabels[item]);
              cardPickup.addEventListener('click', () => {
                const deliveryRadioBtn = cardDelivery.querySelector('input.shipping_method');
                const pickupRadioBtn = cardPickup.querySelector('input.shipping_method');
                totalDelivery.textContent = '0 руб.';
                deliveryRadioBtn.classList.add('is-hidden');
                pickupRadioBtn.classList.remove('is-hidden');
                pickupRadioBtn.checked = 'true';
                adressShipping.readOnly = true;
                billingWooccm11.readOnly = false;
              });
            }
          }
        }
      });
    }
  }
}

main();
