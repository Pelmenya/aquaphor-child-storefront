function main() {
  /**
   *  Форма логина
   */
  const formLogin = document.querySelector('.login');
  /**
   *  Форма регистрации
   */
  const formRegister = document.querySelector('.register');

  formLogin.elements.username.placeholder = 'Введите @почту';
  formLogin.elements.password.placeholder = 'Введите пароль';
  formRegister.elements.email.placeholder = 'Введите @почту';

  /** Кнопки */
  formLogin.elements.login.style.backgroundColor = 'var(--blue-blue)';
  formLogin.elements.login.style.color = '#fff';
  formLogin.elements.login.style.width = '160px';
  formLogin.elements.login.style.fontSize = '13px';
  formLogin.elements.login.value = 'Далее';
  formLogin.elements.login.textContent = 'Далее';

  formRegister.elements.register.style.backgroundColor = 'var(--blue-blue)';
  formRegister.elements.register.style.color = '#fff';
  formRegister.elements.register.style.width = '160px';
  formRegister.elements.register.style.fontSize = '13px';
  formRegister.elements.register.value = 'Зарегистрироваться';
  formRegister.elements.register.textContent = 'Зарегистрироваться';

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

main();
