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
    refreshCart();
    const entrySummary = contentArea.querySelector('.entry-summary');
    entrySummary.querySelector('.woocommerce-Price-amount').style.fontFamily = 'Proxima Nova Rg';
    const shortDescription = entrySummary.querySelector(
      '.woocommerce-product-details__short-description',
    );

    if (shortDescription) {
      const shortDescriptionP = shortDescription.querySelector('p');

      shortDescriptionP.style.fontFamily = 'Proxima Nova Rg';
      shortDescriptionP.style.fontSize = '16px';
      shortDescriptionP.style.color = 'var(--dark)';
    }
    const formCart = entrySummary.querySelector('.cart');

    const checkCount = formCart.querySelector('.quantity');
    checkCount.style.display = 'none';

    const singleAddToCartButton = formCart.querySelector('.single_add_to_cart_button');
    singleAddToCartButton.style.marginTop = '10px';
    singleAddToCartButton.style.color = '#fff';
    singleAddToCartButton.style.width = '180px';
    singleAddToCartButton.style.fontSize = '13px';
    singleAddToCartButton.style.height = '50px';
    singleAddToCartButton.textContent = 'Добавить в корзину';

    const relatedProducts = document.querySelector('.related.products');
    if (relatedProducts) {
      const relatedProductsButtons = relatedProducts.querySelectorAll(
        '.button.product_type_simple.add_to_cart_button.ajax_add_to_cart',
      );
      Object.keys(relatedProductsButtons).forEach((i) => {
        relatedProductsButtons[i].textContent = 'Добавить в корзину';
      });
    }
  }
}

main();
