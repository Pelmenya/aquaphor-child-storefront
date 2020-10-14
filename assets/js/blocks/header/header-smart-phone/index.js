function headerSmartPhoneScript() {
  const headerSmartPhone = document.querySelector('.header.header_smart-phone');
  const formSearch = headerSmartPhone.querySelector('form.woocommerce-product-search');
  if (formSearch) {
    const submitBtn = formSearch.querySelector('button[type="submit"]');
    formSearch.removeChild(submitBtn);
  }

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

  if (searchBtn) {
    // при потери фокуса с input search возвращаемся в исходно состояние
    searchInput.onblur = () => {
      headerLogoSmartPhone.style.display = 'block';
      headerCartBtn.style.display = 'block';
      headerSearchContainer.style.display = 'none';
      searchInput.value = '';
      headerCross.style.display = 'none';
    };
    searchBtn.addEventListener('click', openSearch);
  }
}

function main() {
  headerSmartPhoneScript();
}

main();
