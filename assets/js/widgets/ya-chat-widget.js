function main() {
  const helpBtn = document.querySelector('.header__help-button');
  const helpBtnMobil = document.querySelector('.header__top-item-chat');

  document.addEventListener('DOMContentLoaded', () => {
    const yaChatWidget = document.querySelector('.ya-chat-widget');
    if (yaChatWidget) {
      const yaChatButton = yaChatWidget.querySelector('.ya-chat-button');
      const yaChatHeaderClose = yaChatWidget.querySelector('.ya-chat-header__close');
      const yaChatWidgetMount = yaChatWidget.querySelector('.ya-chat-widget__mount');

      yaChatWidget.style.visibility = 'hidden';
      yaChatButton.classList.add('ya-chat-button_hidden');

      yaChatHeaderClose.addEventListener('click', () => {
        yaChatButton.classList.add('ya-chat-button_hidden');
        yaChatWidget.style.visibility = 'hidden';
      });

      if (helpBtn) {
        helpBtn.addEventListener('click', () => {
          if (!yaChatWidgetMount.classList.contains('ya-chat-widget__mount_visible')) {
            const event = new Event('click', { bubbles: true, cancelable: true });
            yaChatWidget.style.visibility = 'visible';
            yaChatButton.dispatchEvent(event);
          }
        });
      }
      if (helpBtnMobil) {
        helpBtnMobil.addEventListener('click', () => {
          if (!yaChatWidgetMount.classList.contains('ya-chat-widget__mount_visible')) {
            const event = new Event('click', { bubbles: true, cancelable: true });
            yaChatWidget.style.visibility = 'visible';
            yaChatButton.dispatchEvent(event);
          }
        });
      }
    }
  });
}
main();
