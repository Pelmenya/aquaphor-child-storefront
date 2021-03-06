function main() {
  // Заголовок
  const h1 = document.querySelector('.entry-title');
  h1.textContent = 'Адрес';

  /**
   *  Ссылка на меню активная
   */
  const activeLinkMenu = document.querySelector('.is-active');
  activeLinkMenu.style.backgroundColor = 'var(--blue-blue)';

  activeLinkMenu.firstElementChild.textContent = 'Адрес';
  activeLinkMenu.firstElementChild.style.color = '#fff';

  const entryWoocommerce = document.querySelector('.entry-content .woocommerce');
  if (Number(window.screen.width) > 1150) {
    entryWoocommerce.style.display = 'flex';
    entryWoocommerce.style.width = '100%';
  } else {
    entryWoocommerce.style.display = 'flex';
    entryWoocommerce.style.flexDirection = 'column';
    const nav = entryWoocommerce.querySelector('nav.woocommerce-MyAccount-navigation');
    nav.style.flexBasis = ' initial';
    nav.style.marginRight = '0px';
  }
  /**
   *  Форма логина
   */

  const woocommerceMyAccountContent = entryWoocommerce.querySelector(
    '.woocommerce-MyAccount-content',
  );

  const form = woocommerceMyAccountContent.querySelector('form');

  form.querySelector('h3').textContent = 'Адрес доставки';

  /** без страны не сохраняет, по умолчанию Россия */
  form.billing_country.value = 'RU';
  form.billing_country.style.display = 'none';

  form.save_address.style.backgroundColor = 'var(--blue-blue)';
  form.save_address.style.marginTop = '10px';
  form.save_address.style.color = '#fff';
  form.save_address.style.width = '160px';
  form.save_address.style.fontSize = '13px';
  form.save_address.style.height = '50px';

  if (window.screen.width < 450) {
    form.save_address.style.marginTop = '30px';
    form.save_address.style.width = '100%';
    form.save_address.style.fontSize = '16px';
    form.save_address.style.height = '55px';
    form.querySelector('h3').style.display = 'none';
  } else {
    form.save_address.style.width = '160px';
    form.save_address.style.fontSize = '13px';
    form.save_address.style.height = '50px';
  }


  const formLabels = form.querySelectorAll('label');

  Object.keys(formLabels).forEach((item) => {
    if (formLabels[item].attributes.for.nodeValue === 'billing_first_name') {
      formLabels[item].textContent = 'Имя';
    }
    if (formLabels[item].attributes.for.nodeValue === 'billing_last_name') {
      formLabels[item].textContent = 'Фамилия';
    }
    if (formLabels[item].attributes.for.nodeValue === 'billing_wooccm11') {
      formLabels[item].textContent = 'Отчество';
    }
    if (formLabels[item].attributes.for.nodeValue === 'billing_wooccm12') {
      formLabels[item].textContent = 'Район';
    }
    if (formLabels[item].attributes.for.nodeValue === 'billing_phone') {
      formLabels[item].textContent = 'Телефон';
    }
    if (formLabels[item].attributes.for.nodeValue === 'billing_email') {
      formLabels[item].textContent = 'Эл. почта';
    }
    if (formLabels[item].attributes.for.nodeValue === 'billing_country') {
      formLabels[item].textContent = '';
    }
  });
}

main();
