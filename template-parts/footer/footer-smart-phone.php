<?php
  if (is_cart()) {
    global $woocommerce;
    if ( $woocommerce->cart->cart_contents_count == 0 ) {
      get_template_part('template-parts/footer/footer-smart-phone-templates/footer-cart-empty-smart-phone');
    } else  get_template_part('template-parts/footer/footer-smart-phone-templates/footer-cart-smart-phone');
  }
  elseif(is_checkout()) {
    get_template_part('template-parts/footer/footer-smart-phone-templates/footer-checkout-smart-phone');
  }
  elseif(is_view_order_page()){}
  else
    get_template_part('template-parts/footer/footer-smart-phone-templates/footer-navigation-smart-phone');
?>
