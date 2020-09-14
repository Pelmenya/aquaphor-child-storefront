function main() {
  if (window.screen.width < 450) {
    // - высота хедера - высота футера
    if (document.querySelector('.site-content').offsetHeight < window.screen.height - 58 - 65) {
      document.querySelector('.site-content').style.height = `${window.screen.height - 58 - 65}px`;
    }
  }
}

main();
