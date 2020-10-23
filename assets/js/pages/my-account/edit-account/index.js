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
  const formEditAccount = document.querySelector('.edit-account');

  if (formEditAccount) {
    formEditAccount.querySelector('em').textContent = '';

    const fieldset = formEditAccount.querySelector('fieldset');
    const legend = formEditAccount.querySelector('legend');
    fieldset.style.backgroundColor = '#fff';
    legend.style.backgroundColor = '#fff';
    fieldset.style.padding = '0';

    legend.textContent = 'Изменение пароля';
    legend.style.fontFamily = 'Proxima Nova Rg';
    legend.style.fontSize = '18px';
    legend.style.fontWeight = 'bold';
    legend.style.color = 'var(--dark)';

    /* все подписи к инпутам */

    formEditAccount.account_first_name.placeholder = 'Введите имя';
    formEditAccount.account_last_name.placeholder = 'Введите фамилию';
    formEditAccount.account_display_name.placeholder = 'Введите Ваше имя для отображения на сайте';
    formEditAccount.account_email.placeholder = 'Введите @почту';
    formEditAccount.password_current.placeholder = 'Текущий пароль';
    formEditAccount.password_1.placeholder = 'Новый пароль';
    formEditAccount.password_2.placeholder = 'Новый пароль';

    const formLabels = formEditAccount.querySelectorAll('label');
    Object.keys(formLabels).forEach((item) => {
      if (formLabels[item].attributes.for.nodeValue === 'account_first_name') {
        formLabels[item].textContent = 'Имя';
      }
      if (formLabels[item].attributes.for.nodeValue === 'account_last_name') {
        formLabels[item].textContent = 'Фамилия';
      }
      if (formLabels[item].attributes.for.nodeValue === 'account_display_name') {
        formLabels[item].textContent = 'Имя на сайте';
      }
      if (formLabels[item].attributes.for.nodeValue === 'account_email') {
        formLabels[item].textContent = 'Эл. адрес';
      }
      if (formLabels[item].attributes.for.nodeValue === 'password_current') {
        formLabels[item].textContent = 'Текущий пароль (оставьте поле пустым, если не хотите менять)';
      }
      if (formLabels[item].attributes.for.nodeValue === 'password_1') {
        formLabels[item].textContent = 'Новый пароль (оставьте поле пустым, если не хотите менять)';
      }
      if (formLabels[item].attributes.for.nodeValue === 'password_2') {
        formLabels[item].textContent = 'Новый пароль еще раз';
      }
    });

    formEditAccount.save_account_details.style.backgroundColor = 'var(--blue-blue)';
    formEditAccount.save_account_details.style.marginTop = '10px';
    formEditAccount.save_account_details.style.color = '#fff';
    if (window.screen.width < 450) {
      formEditAccount.save_account_details.style.width = '100%';
      formEditAccount.save_account_details.style.fontSize = '16px';
      formEditAccount.save_account_details.style.height = '55px';
      formEditAccount.save_account_details.style.marginTop = '0px';
    } else {
      formEditAccount.save_account_details.style.width = '180px';
      formEditAccount.save_account_details.style.fontSize = '13px';
      formEditAccount.save_account_details.style.height = '50px';
    }
  }
}

main();
