
function setDesctopScript() {
  /**
   *  Форма восстановлениея пароля
  */

  const formLostResetPassword = document.querySelector('.lost_reset_password');

  if (formLostResetPassword) {
    const formLostResetPasswordLabels = formLostResetPassword.querySelectorAll('label');
    const formLostResetPasswordP = formLostResetPassword.querySelectorAll('p');
    const formLostResetPasswordBtn = formLostResetPassword.querySelector('.button');
    const h1 = document.querySelector('h1');
    formLostResetPasswordP[0].textContent = 'Если не удается вспомнить пароль, пожалуйста введите ниже свой Email. Мы отправим на него ссылку для создания нового пароля от вашей учетной записи.';

    formLostResetPasswordP[0].style.fontSize = '15px';
    formLostResetPasswordP[0].style.color = 'var(--dark)';
    formLostResetPasswordP[0].style.fontFamily = 'Proxima Nova Rg';
    formLostResetPasswordP[0].style.maxWidth = '748px';

    formLostResetPasswordP[0].style.fontSize = '16px';
    formLostResetPasswordP[0].style.color = '#5f5f5f';
    formLostResetPasswordP[0].style.fontFamily = 'Proxima Nova Rg';
    formLostResetPasswordLabels[0].textContent = 'Email';
    formLostResetPasswordLabels[0].style.marginBottom = '6px';

    formLostResetPasswordP[2].style.paddingTop = '0px';
    formLostResetPasswordP[2].style.marginTop = '0px';

    formLostResetPassword.elements.user_login.placeholder = 'Введите эл.почту';
    formLostResetPassword.elements.user_login.paddingLeft = '20px';

    formLostResetPasswordBtn.style.backgroundColor = 'var(--blue-blue)';
    formLostResetPasswordBtn.style.marginTop = '10px';
    formLostResetPasswordBtn.style.color = '#fff';


    formLostResetPasswordBtn.style.fontSize = '13px';
    formLostResetPasswordBtn.style.height = '50px';
    formLostResetPasswordBtn.value = 'Сбросить пароль';
    formLostResetPasswordBtn.textContent = 'Сбросить пароль';

    h1.textContent = 'Восстановление ';

    if (window.screen.width < 450) {
      formLostResetPasswordP[0].textContent = 'Введите вашу эл. почту и мы вышлем вам инструкции по смене пароля';
      formLostResetPasswordLabels[0].textContent = 'Эл. адрес';
      formLostResetPasswordLabels[0].style.fontSize = '16px';
      formLostResetPasswordLabels[0].style.lineHeight = '24px';
      formLostResetPasswordLabels[0].style.fontWeight = '600';
      formLostResetPasswordP[0].style.letterSpacing = '0'
      formLostResetPasswordP[0].style.lineHeight = '24px';
      formLostResetPasswordP[0].style.marginBottom = '10px';
      formLostResetPasswordBtn.style.width = '100%';
      h1.textContent = 'Восстановить пароль';
      formLostResetPasswordBtn.style.fontSize = '16px';
      formLostResetPasswordBtn.style.height = '44px';
      formLostResetPasswordBtn.style.borderRadius = '5px';
      formLostResetPasswordBtn.style.boxShadow = '0 8px 10px 0 rgba(16, 84, 219, 0.3), inset 0 10px 10px 0 #1463FF';
         formLostResetPasswordBtn.style.backgroundImage = 'linear-gradient(339deg, #1054DB 66%, #135BE9 35%)';
      formLostResetPasswordBtn.style.marginTop = '25px';
      formLostResetPasswordBtn.value = 'Сбросить';
      formLostResetPasswordBtn.value = 'Сбросить';
      formLostResetPasswordBtn.textContent = 'Сбросить';
    }
  }
}

function main() {
  setDesctopScript();
}

main();
