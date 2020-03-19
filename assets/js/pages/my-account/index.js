function main() {
  /**
   *  Форма логина
   */
  const formLogin = document.querySelector('.login');

  /**
   *  Форма регистрации
   */
  const formRegister = document.querySelector('.register');

  /**
   *  Форма восстановлениея пароля
  */

  const formLostResetPassword = document.querySelector('.lost_reset_password');

  if (formLogin && formRegister) {
    const formLoginLabels = formLogin.querySelectorAll('label');
    const formLoginCheckBoxSave = formLoginLabels[2].querySelector('span');
    const formLoginLostPassword = formLogin.querySelector('.lost_password');
    const formLoginLostPasswordLink = formLoginLostPassword.querySelector('a');

    const formRegistrLabels = formRegister.querySelectorAll('label');

    formLoginLabels[0].textContent = 'Эл. почта';
    formLoginLabels[1].textContent = 'Пароль';
    formRegistrLabels[0].textContent = 'Эл. почта';

    formLoginCheckBoxSave.textContent = 'Запомнить';

    formLoginLostPasswordLink.textContent = 'Забыли пароль?';
    formLoginLostPasswordLink.style.color = 'var(--dark)';
    formLoginLostPasswordLink.style.fontSize = '14px';
    formLoginLostPasswordLink.style.fontWeight = 'bold';

    formLogin.elements.username.placeholder = 'Введите @почту';
    formLogin.elements.password.placeholder = 'Введите пароль';
    formRegister.elements.email.placeholder = 'Введите @почту';

    /** Кнопки */
    formLogin.elements.login.style.backgroundColor = 'var(--blue-blue)';
    formLogin.elements.login.style.color = '#fff';
    formLogin.elements.login.style.width = '160px';
    formLogin.elements.login.style.fontSize = '13px';
    formLogin.elements.login.style.marginTop = '25px';
    formLogin.elements.login.style.height = '50px';
    formLogin.elements.login.value = 'Далее';
    formLogin.elements.login.textContent = 'Далее';

    formRegister.elements.register.style.backgroundColor = 'var(--blue-blue)';
    formRegister.elements.register.style.color = '#fff';
    formRegister.elements.register.style.height = '50px';
    formRegister.elements.register.style.width = '160px';
    formRegister.elements.register.style.fontSize = '13px';
    formRegister.elements.register.value = 'Получить пароль';
    formRegister.elements.register.textContent = 'Получить пароль';

    const arrayOfElementP = formRegister.querySelectorAll('p');

    arrayOfElementP[0].style.marginBottom = '0px';

    arrayOfElementP[1].textContent = 'Пароль будет отправлен на указанный адрес';
    arrayOfElementP[1].style.fontSize = '12px';
    arrayOfElementP[1].style.fontFamily = 'Proxima Nova Rg';
    arrayOfElementP[1].style.color = '#686976';
    arrayOfElementP[1].style.marginTop = '8px';
    arrayOfElementP[1].style.marginBottom = '16px';

    arrayOfElementP[2].style.marginTop = '0px';
    arrayOfElementP[2].style.fontSize = '16px';
    arrayOfElementP[2].style.fontFamily = 'Proxima Nova Rg';
    arrayOfElementP[2].style.color = 'var(--dark)';
    arrayOfElementP[2].style.marginBottom = '22px';
  }

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
