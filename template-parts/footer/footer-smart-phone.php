<?php
  if (is_cart()) {
     get_template_part('template-parts/footer/footer-smart-phone-templates/footer-cart-smart-phone');
  }
  elseif(is_checkout()) {
    get_template_part('template-parts/footer/footer-smart-phone-templates/footer-checkout-smart-phone');
  }
  elseif(is_view_order_page()){}
  else
    get_template_part('template-parts/footer/footer-smart-phone-templates/footer-navigation-smart-phone');
?>
