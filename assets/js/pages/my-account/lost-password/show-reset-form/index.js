function main() {
  /**
   *  Форма восстановлениея пароля
  */
  const formLostResetPassword = document.querySelector('.lost_reset_password');

  if (formLostResetPassword) {
    const formLabels = formLostResetPassword.querySelectorAll('label');

    Object.keys(formLabels).forEach((item) => {
      if (formLabels[item].attributes.for.nodeValue === 'password_1') {
        formLabels[item].textContent = 'Новый пароль';
      }
      if (formLabels[item].attributes.for.nodeValue === 'password_2') {
        formLabels[item].textContent = 'Повторите новый пароль';
      }
    });

    const formLostResetPasswordBtn = formLostResetPassword.querySelector('.button');

    formLostResetPasswordBtn.style.backgroundColor = 'var(--blue-blue)';
    formLostResetPasswordBtn.style.marginTop = '10px';
    formLostResetPasswordBtn.style.color = '#fff';

    if (window.screen.width < 450) {
      formLostResetPasswordBtn.style.width = '100%';
      formLostResetPasswordBtn.style.fontSize = '16px';
      formLostResetPasswordBtn.style.height = '55px';
      formLostResetPasswordBtn.value = 'Сохранить';
      formLostResetPasswordBtn.textContent = 'Сохранить';
    } else {
      formLostResetPasswordBtn.style.width = '160px';
      formLostResetPasswordBtn.style.fontSize = '13px';
      formLostResetPasswordBtn.style.height = '50px';
      formLostResetPasswordBtn.value = 'Сохранить пароль';
      formLostResetPasswordBtn.textContent = 'Сохранить пароль';
    }
  }
}

main();
