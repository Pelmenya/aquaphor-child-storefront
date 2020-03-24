function main() {
  // Заголовок
  const h1 = document.querySelector('.entry-title');
  /**
   *  Ссылка на меню активная
   */
  const activeLinkMenu = document.querySelector('.is-active');
  activeLinkMenu.style.backgroundColor = 'var(--blue-blue)';

  activeLinkMenu.firstElementChild.textContent = 'Адрес';
  activeLinkMenu.firstElementChild.style.color = '#fff';
  /**
   *  Форма логина
   */
  const formAll = document.querySelectorAll('form');
  formAll[1].shipping_country.style.display = 'none';

  formAll[1].save_address.style.backgroundColor = 'var(--blue-blue)';
  formAll[1].save_address.style.marginTop = '10px';
  formAll[1].save_address.style.color = '#fff';
  formAll[1].save_address.style.width = '160px';
  formAll[1].save_address.style.fontSize = '13px';
  formAll[1].save_address.style.height = '50px';

  /* все подписи к инпутам */
  const entryWoocommerce = document.querySelector('.entry-content .woocommerce');
  entryWoocommerce.style.display = 'flex';
  entryWoocommerce.style.width = '100%';

  const formLabels = formAll[1].querySelectorAll('label');

  Object.keys(formLabels).forEach((item) => {
    if (formLabels[item].attributes.for.nodeValue === 'shipping_first_name') {
      formLabels[item].textContent = 'Имя';
    }
    if (formLabels[item].attributes.for.nodeValue === 'shipping_last_name') {
      formLabels[item].textContent = 'Фамилия';
    }
    if (formLabels[item].attributes.for.nodeValue === 'shipping_wooccm9') {
      formLabels[item].textContent = 'Отчество';
    }
    if (formLabels[item].attributes.for.nodeValue === 'shipping_wooccm10') {
      formLabels[item].textContent = 'Район';
    }
    if (formLabels[item].attributes.for.nodeValue === 'shipping_country') {
      formLabels[item].textContent = '';
    }
  });

  h1.textContent = 'Адрес';
}

main();
