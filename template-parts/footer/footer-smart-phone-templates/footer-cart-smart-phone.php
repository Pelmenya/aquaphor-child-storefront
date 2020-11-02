<footer class="footer-smart footer-smart_cart
  <?php
    global $woocommerce;
    if ( $woocommerce->cart->cart_contents_count == 0 ) {
      echo "footer-smart-display-none";
    }
  ?>
   ">
  <div class="footer-smart__item footer-smart__item_left">
    <h2 class="footer-smart__cart-total-title">ПОДЫТОГ</h2>
    <p class="footer-smart__cart-total-price">
      <?php wc_cart_totals_subtotal_html(); ?>
    </p>
  </div>
  <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>">
    <span class="footer-smart__cart-checkout-btn">Оформить</span>
  </a>
</footer>