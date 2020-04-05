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
}

main();
