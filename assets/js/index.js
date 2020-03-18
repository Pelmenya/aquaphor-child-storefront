function main() {
  const userNameInput = document.getElementById('username');
  const passwordInput = document.getElementById('password');
  const regEmailInput = document.getElementById('reg_email');

  const formLogin = document.querySelector('.login');
  const formRegister = document.querySelector('.register');

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


  console.log(formLogin);

  userNameInput.placeholder = 'Введите @почту';
  passwordInput.placeholder = 'Введите пароль';
  regEmailInput.placeholder = 'Введите @почту';
}

main();
