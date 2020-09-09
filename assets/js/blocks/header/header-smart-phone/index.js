function headerSmartPhoneScript() {
  const headerSmartPhone = document.querySelector('.header.header_smart-phone')
  const searchBtn = headerSmartPhone.querySelector('.header__search-button');
  const headerLogoSmartPhone = headerSmartPhone.querySelector('.header__logo_smart-phone');
  const headerCartBtn = headerSmartPhone.querySelector('.header__cart-button');
  const headerSearchContainer = headerSmartPhone.querySelector('.header__search-container');
  const searchInput = headerSmartPhone.querySelector('input.search-field');
  const headerCross = headerSmartPhone.querySelector('.header__cross');

  function openSearch() {
    headerLogoSmartPhone.style.display = 'none';
    headerCartBtn.style.display = 'none';
    headerSearchContainer.style.display = 'block';
    searchInput.value = '';
    searchInput.focus();
    headerCross.style.display = 'block';
  }

  searchInput.onblur = () => {
    headerLogoSmartPhone.style.display = 'block';
    headerCartBtn.style.display = 'block';
    headerSearchContainer.style.display = 'none';
    searchInput.value = '';
    headerCross.style.display = 'none';
  }


  function closeSearch() {}

  searchBtn.addEventListener('click', openSearch);

  console.log(searchBtn);
  console.log(headerCartBtn);
  console.log(headerLogoSmartPhone);
}

function main() {

  headerSmartPhoneScript();
}
main();
