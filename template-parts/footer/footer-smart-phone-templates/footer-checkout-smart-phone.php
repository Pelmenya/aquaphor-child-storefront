<?php 
if ( is_wc_endpoint_url( 'order-received' )) : ?>
<footer class="footer-smart footer-checkout-smart-phone">
    <button class="footer-checkout-smart-phone__button" onclick="document.location='https://aquaphor.store?intro=false'"> Вернуться на сайт</button>
</footer>
<?php 

elseif ( wc_get_page_id( 'checkout' ) > 0 ) : ?>
<footer class="footer-smart footer-checkout-smart-phone">
  <button class="footer-checkout-smart-phone__button">Далее</button>
</footer>
<?php endif; ?>

