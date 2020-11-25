function setSmartPhoneScript() {
  /**
   *  Форма логина
   */
  const formLogin = document.querySelector('.login');
  const h1 = document.querySelector('h1.entry-title');
  if (h1) h1.style.display = 'none';

  /**
   *  Форма регистрации
   */
  const formRegister = document.querySelector('.register');
  if (formLogin && formRegister) {
    const formLoginLabels = formLogin.querySelectorAll('label');
    const formLoginCheckBoxSave = formLoginLabels[2].querySelector('span');
    const formLoginLostPassword = formLogin.querySelector('.lost_password');
    const formLoginLostPasswordLink = formLoginLostPassword.querySelector('a');
    const colFormLogin = document.querySelector('div.u-column1.col-1');
    const colFormRegister = document.querySelector('div.u-column2.col-2');
    const linkButton = colFormRegister.querySelector('.form-description_link-button');
    const formRegistrLabels = formRegister.querySelectorAll('label');

    h1.style.display = 'none';

    linkButton.addEventListener('click', () => {
      colFormLogin.classList.toggle('display-none-smart-phone');
      colFormRegister.classList.toggle('display-none-smart-phone');
    });

    formLoginLabels[0].textContent = 'Эл. адрес';
    formLoginLabels[1].textContent = 'Пароль';
    formRegistrLabels[0].textContent = 'Эл. адрес';

    formLoginCheckBoxSave.textContent = 'Запомнить';

    formLoginLostPasswordLink.textContent = 'Забыли пароль?';

    formLogin.elements.username.placeholder = 'Введите эл. почту';
    formLogin.elements.password.placeholder = '';
    formRegister.elements.email.placeholder = 'Введите эл. почту';

    /** Кнопки */
    // вытаскиваем адрес сайта

    formLogin.elements.login.value = 'Войти';
    formLogin.elements.login.textContent = 'Войти';

    formRegister.elements.register.value = 'Зарегистрироваться';
    formRegister.elements.register.textContent = 'Зарегистрироваться';

    const arrayOfElementP = formRegister.querySelectorAll('p');

    // arrayOfElementP[0].style.marginBottom = '0px';

    arrayOfElementP[1].textContent = 'Пароль будет отправлен на указанный адрес';
    arrayOfElementP[1].style.fontSize = '12px';
    arrayOfElementP[1].style.fontFamily = 'Proxima Nova Rg';
    arrayOfElementP[1].style.color = '#686976';
    arrayOfElementP[1].style.marginTop = '8px';
    arrayOfElementP[1].style.marginBottom = '16px';
    arrayOfElementP[1].style.display = 'none';

    arrayOfElementP[2].style.marginTop = '0px';
    arrayOfElementP[2].style.fontSize = '16px';
    arrayOfElementP[2].style.fontFamily = 'Proxima Nova Rg';
    arrayOfElementP[2].style.color = 'var(--dark)';
    arrayOfElementP[2].style.marginBottom = '22px';
  }
}

function setDesctopScript() {
  /**
   *  Форма логина
   */
  const formLogin = document.querySelector('.login');

  /**
   *  Форма регистрации
   */
  const formRegister = document.querySelector('.register');

  if (!(formLogin && formRegister)) {
    document.querySelector('h1').textContent = 'Заказы';
    const entryWoocommerce = document.querySelector('.entry-content .woocommerce');
    entryWoocommerce.style.display = 'none';
    const url = new URL(window.location.href).origin;
    window.location.href = `${url}/my-account/orders`;
  }

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
    // вытаскиваем адрес сайта

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
}

function main() {
  if (window.screen.width < 450) {
    setSmartPhoneScript();
  } else setDesctopScript();
}

main();
