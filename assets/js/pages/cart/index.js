function refreshCart() {
}

/** jQuery нужен для отслеживания обновления корзины */
jQuery(document.body).on('updated_cart_totals', () => refreshCart());
jQuery(document.body).on('applied_coupon', () => refreshCart());
