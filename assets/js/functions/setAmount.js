function amountNormalize(str) {
  const arr = str.split('.');
  arr.splice(arr.length - 1, 1);
  return `${arr.join(' ')} руб.`;
}

function main() {
  const amounts = document.querySelectorAll('.amount');
  Object.keys(amounts).forEach((i) => {
    amounts[i].textContent = amountNormalize(amounts[i].textContent);
  });
}

main();
