<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>


<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<?php
/**
 * Контейнер страницы для смартфонов
 *
 *
 */
?>
  <div class="checkout-smart-phone">
    <div class="checkout-smart-phone__wrap">
      <div class="checkout-smart-phone__wrap-col">
        <input readonly class="checkout-smart-phone__radio-btn checkout-smart-phone__radio-btn_delivery" type="radio" checked>
        <p class="checkout-smart-phone__text">Доставка</p>
      </div>
      <div class="checkout-smart-phone__wrap-col">
        <input readonly class="checkout-smart-phone__radio-btn checkout-smart-phone__radio-btn_contacts" type="radio">
        <p class="checkout-smart-phone__text">Контакты</p>
      </div>
      <div class="checkout-smart-phone__wrap-col">
        <input readonly class="checkout-smart-phone__radio-btn checkout-smart-phone__radio-btn_payment" type="radio">
        <p class="checkout-smart-phone__text">Оплата</p>
      </div>
      <div class="checkout-smart-phone__line checkout-smart-phone__line_left"></div>
      <div class="checkout-smart-phone__line checkout-smart-phone__line_right"></div>
    </div>

    <div class="checkout-smart-phone__stage checkout-smart-phone__stage_delivery">
      <div class="checkout-smart-phone__card checkout-smart-phone__card_delivery">
        <div class="checkout-smart-phone__wrap">

        </div>
      </div>
      <div class="checkout-smart-phone__card checkout-smart-phone__card_pickup">
        <div class="checkout-smart-phone__wrap">

        </div>
      </div>
    </div>
    <div class="checkout-smart-phone__stage checkout-smart-phone__stage_contacts checkout-smart-phone__stage_is-closed">
    </div>
    <div class="checkout-smart-phone__stage checkout-smart-phone__stage_payment checkout-smart-phone__stage_is-closed">
      <div class="checkout-smart-phone__card checkout-smart-phone__wrap checkout-smart-phone__card_on-delivery">
        <div class="checkout-smart-phone__wrap-col checkout-smart-phone__wrap-col_align-start">
          <h4 class="checkout-smart-phone__text checkout-smart-phone__text_card">Оплата при получении</h4>
          <p class="checkout-smart-phone__card-description">Наличными или картой курьеру</p>
        </div>
      </div>
      <div class="checkout-smart-phone__card checkout-smart-phone__wrap checkout-smart-phone__card_bank">
        <div class="checkout-smart-phone__wrap-col checkout-smart-phone__wrap-col_align-start">
          <h4 class="checkout-smart-phone__text checkout-smart-phone__text_card">Оплата на сайте</h4>
          <p class="checkout-smart-phone__card-description">Картой Visa, MasterCard или МИР</p>
        </div>
      </div>
      <div class="checkout-smart-phone__wrap">
        <p class="checkout-smart-phone__card-description">Товары</p>
        <div class="checkout-smart-phone__points"></div>
        <div class="checkout-smart-phone__price">
          <?php
            wc_cart_totals_subtotal_html();
          ?>
        </div>
      </div>
      <div class="checkout-smart-phone__wrap">
      <p class="checkout-smart-phone__card-description">Доставка</p>
        <div class="checkout-smart-phone__points"></div>
        <div class="checkout-smart-phone__price checkout-smart-phone__price_delivery">400 руб.</div>
      </div>
    </div>
  </div>


	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
