function amountNormalize(str) {
  const arr = str.split('.');
  arr.splice(arr.length - 1, 1);
  return `${arr.join(' ')} руб.`;
}

function refreshCart() {
  const amounts = document.querySelectorAll('.amount');
  Object.keys(amounts).forEach((i) => {
    amounts[i].textContent = amountNormalize(amounts[i].textContent);
  });
}

function main() {
  const contentArea = document.querySelector('.content-area');

  if (contentArea) {
    contentArea.style.marginTop = '84px';
  }

  refreshCart();
}

main();
