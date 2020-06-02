function main() {
  const helpBtn = document.querySelector('.header__help-button');
  document.addEventListener('DOMContentLoaded', () => {
    const yaChatWidget = document.querySelector('.ya-chat-widget');
    const yaChatButton = yaChatWidget.querySelector('.ya-chat-button');
    const yaChatHeaderClose = yaChatWidget.querySelector('.ya-chat-header__close');
    const yaChatWidgetMount = yaChatWidget.querySelector('.ya-chat-widget__mount');

    yaChatWidget.style.visibility = 'hidden';
    yaChatButton.classList.add('ya-chat-button_hidden');

    yaChatHeaderClose.addEventListener('click', () => {
      yaChatWidget.style.visibility = 'hidden';
      yaChatButton.classList.add('ya-chat-button_hidden');
    });

    function openYaChatWidget() {
      if (!yaChatWidgetMount.classList.contains('ya-chat-widget__mount_visible')) {
        const event = new Event('click', { bubbles: true, cancelable: true });
        yaChatButton.dispatchEvent(event);
      }
    }
    helpBtn.addEventListener('click', openYaChatWidget);
  });
}
main();
