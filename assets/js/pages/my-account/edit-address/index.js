function main() {
  // Заголовок
  const h1 = document.querySelector('.entry-title');
  /**
   *  Ссылка на меню активная
   */
  const entryWoocommerce = document.querySelector('.entry-content .woocommerce');
  entryWoocommerce.style.display = 'flex';
  entryWoocommerce.style.width = '100%';

  const activeLinkMenu = document.querySelector('.is-active');
  activeLinkMenu.style.backgroundColor = 'var(--blue-blue)';

  activeLinkMenu.firstElementChild.textContent = 'Адрес';
  activeLinkMenu.firstElementChild.style.color = '#fff';

  const contentConainer = document.querySelector('.woocommerce-MyAccount-content');
  const contentAddressTitle = document.querySelector('.woocommerce-Address-title');
  const h3 = contentAddressTitle.querySelector('h3');
  const a = contentAddressTitle.querySelector('a');
  const address = contentConainer.querySelector('address');
  const pAll = contentConainer.querySelectorAll('p');

  contentConainer.style.fontSize = '16px';
  contentConainer.style.fontFamily = 'Proxima Nova Rg';
  contentConainer.style.color = 'var(--dark)';

  pAll[0].textContent = 'Этот адрес будет использоваться для доставки';
  pAll[0].style.marginBottom = '46px';

  contentAddressTitle.style.display = 'flex';

  h3.style.color = 'var(--blue-blue)';
  h3.style.marginBottom = '0px';
  a.style.marginTop = '0px';
  a.style.marginLeft = '12px';
  a.style.fontSize = '14px';
  a.style.color = 'var(--blue-blue)';

  if (address.textContent.trim() === 'Вы пока не указали этот тип адреса.') {
    address.textContent = 'Информация отсуствует';
  }

  address.style.marginTop = '19px';
  h1.textContent = 'Адрес';
}

main();
