function main() {
  function fixedMenu() {
    const headerSmartMenu = document.querySelector('.header.header_smart-phone');
    const sticky = headerSmartMenu.offsetHeight;
    const bufferForSticky = document.querySelector('.buffer-for-sticky');
    if (window.pageYOffset >= sticky) {
      setTimeout(() => {
        bufferForSticky.style.height = `${headerSmartMenu.offsetHeight}px`;
        headerSmartMenu.classList.add('header_smart-phone_fixed');
      }, 50);
    } else {
      setTimeout(() => {
        headerSmartMenu.classList.remove('header_smart-phone_fixed');
        bufferForSticky.style.height = '0px';
      }, 50);
    }
  }
  window.onscroll = () => {
    fixedMenu();
  };
}

main();
