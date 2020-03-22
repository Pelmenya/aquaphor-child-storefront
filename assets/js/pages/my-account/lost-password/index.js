function main() {
  /**
   *  Форма восстановлениея пароля
  */

  const formLostResetPassword = document.querySelector('.lost_reset_password');

  if (formLostResetPassword) {
    const formLostResetPasswordLabels = formLostResetPassword.querySelectorAll('label');
    const formLostResetPasswordP = formLostResetPassword.querySelectorAll('p');
    const formLostResetPasswordBtn = formLostResetPassword.querySelector('.button');
    formLostResetPasswordP[0]
      .textContent = 'Если не удается вспомнить пароль, пожалуйста введите ниже свой Email. Мы отправим на него ссылку для создания нового пароля от вашей учетной записи.';

    formLostResetPasswordP[0].style.fontSize = '15px';
    formLostResetPasswordP[0].style.color = 'var(--dark)';
    formLostResetPasswordP[0].style.fontFamily = 'Proxima Nova Rg';
    formLostResetPasswordP[0].style.maxWidth = '748px';

    formLostResetPasswordP[0].style.fontSize = '14px';
    formLostResetPasswordP[0].style.color = '#223c52';
    formLostResetPasswordP[0].style.fontFamily = 'Proxima Nova Rg';
    formLostResetPasswordLabels[0].textContent = 'Email';
    formLostResetPasswordLabels[0].style.marginBottom = '6px';

    formLostResetPasswordP[2].style.paddingTop = '0px';
    formLostResetPasswordP[2].style.marginTop = '0px';

    formLostResetPassword.elements.user_login.placeholder = 'Введите вашу @почту';
    formLostResetPassword.elements.user_login.paddingLeft = '20px';

    formLostResetPasswordBtn.style.backgroundColor = 'var(--blue-blue)';
    formLostResetPasswordBtn.style.marginTop = '10px';
    formLostResetPasswordBtn.style.color = '#fff';
    formLostResetPasswordBtn.style.width = '160px';
    formLostResetPasswordBtn.style.fontSize = '13px';
    formLostResetPasswordBtn.style.height = '50px';
    formLostResetPasswordBtn.value = 'Сбросить пароль';
    formLostResetPasswordBtn.textContent = 'Сбросить пароль';

    document.querySelector('h1').textContent = 'Восстановление ';
  }
}

main();
