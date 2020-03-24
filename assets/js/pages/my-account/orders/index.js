function main() {
  /**
   *  Ссылка на меню активная
   */
  const activeLinkMenu = document.querySelector('.is-active');
  activeLinkMenu.style.backgroundColor = 'var(--blue-blue)';
  activeLinkMenu.firstElementChild.style.color = '#fff';
  /**
   *  Форма логина
   */

  /* все подписи к инпутам */
  const entryWoocommerce = document.querySelector('.entry-content .woocommerce');
  entryWoocommerce.style.display = 'flex';
  entryWoocommerce.style.width = '100%';

  const woocommerceInfo = entryWoocommerce.querySelector('.woocommerce-info');
  if (woocommerceInfo) {
    const woocommerceBtn = entryWoocommerce.querySelector('.woocommerce-Button');
    woocommerceBtn.textContent = 'В магазин';
    woocommerceBtn.style.color = 'var(--dark)';
    woocommerceBtn.style.fontSize = '14px';
    woocommerceBtn.style.fontFamily = 'Proxima Nova Rg';
    woocommerceBtn.style.fontWeight = 'bold';
    woocommerceBtn.style.textDecoration = 'underline';

    woocommerceInfo.childNodes[2].textContent = 'Заказы отсутствуют';
    woocommerceInfo.style.borderLeft = 'none';
    woocommerceInfo.style.color = 'var(--dark)';
    woocommerceInfo.style.fontSize = '16px';
    woocommerceInfo.style.fontFamily = 'Proxima Nova Rg';

    woocommerceInfo.style.backgroundColor = '#f7f8f9';
    woocommerceInfo.style.borderRadius = '3px';
    woocommerceInfo.style.boxShadow = ' inset 0 1px 1px rgba(0, 0, 0, 0.125)';
  }

  const accountOrdersTable = document.querySelector('.account-orders-table');

  if (accountOrdersTable) {
    const accountOrdersTableTH = accountOrdersTable.querySelectorAll('.nobr');
    accountOrdersTableTH[0].textContent = 'Номер';
    accountOrdersTableTH[1].textContent = 'Дата';
    accountOrdersTableTH[2].textContent = 'Статус';
    accountOrdersTableTH[3].textContent = 'Сумма';
    accountOrdersTableTH[4].textContent = 'Действие';

    Object.keys(accountOrdersTableTH).forEach((i) => {
      accountOrdersTableTH[i].style.fontSize = '16px';
      accountOrdersTableTH[i].style.fontFamily = 'Proxima Nova Rg';
      accountOrdersTableTH[i].style.fontWeight = 'bold';
      accountOrdersTableTH[i].style.padding = '1em';
      accountOrdersTableTH[i].style.color = 'var(--dark)';
    });
  }
}

main();
