function setCurrencySymbol() {
  const currencySymbols = document.querySelectorAll('.woocommerce-Price-currencySymbol');
  if (currencySymbols) {
    Object.keys(currencySymbols).forEach((item) => {
      currencySymbols[item].textContent = currencySymbols[item].textContent.replace(/₽/g, ' руб.');
    });
  }
}

setCurrencySymbol();
