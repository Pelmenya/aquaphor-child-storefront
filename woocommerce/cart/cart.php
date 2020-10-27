<?php
get_template_part('inc/view_array');

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="cart-smart-phone">
<?php
do_action( 'woocommerce_before_cart' ); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

	<?php do_action( 'woocommerce_before_cart_table' ); ?>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>
			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
          <div class="cart-smart-phone__card">
            <a class="cart-smart-phone__pic" href="<?php echo esc_url( $product_permalink )?>">
              <img class="cart-smart-phone__pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" alt="<?php echo $_product->get_title();?>">
            </a>
            <div class="cart-smart-phone__wrap">
              <h6 class="cart-smart-phone__title"><?php echo $_product->get_title();?></h6>
              <p class="cart-smart-phone__price"><?php	echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.?></p>

              <div class="cart-smart-phone__counter-wrap">
                <button type="button" class="cart-smart-phone__button minus"><span>-</span></button>
                <?php
                  if ( $_product->is_sold_individually() ) {
                    $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                  } else {
                    $product_quantity = woocommerce_quantity_input(
                      array(
                        'input_name'   => "cart[{$cart_item_key}][qty]",
                        'input_value'  => $cart_item['quantity'],
                        'max_value'    => $_product->get_max_purchase_quantity(),
                        'min_value'    => '0',
                        'product_name' => $_product->get_name(),
                        'classes' => 'cart-smart-phone__counter',
                      ),
                      $_product,
                      false
                    );
                  }
                    echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                ?>
                <button type="button" class="cart-smart-phone__button plus">+</button>
            </div>
            </div>
            <?php
              echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                'woocommerce_cart_item_remove_link',
                sprintf(
                  '<a class="cart-smart-phone__cross" href="%s" aria-label="%s" data-product_id="%s" data-product_sku="%s">
                    <svg width="18" height="18" viewBox="0 0 18 18">
                      <g fill="none" fill-rule="evenodd">
                          <g fill="#28293C" fill-rule="nonzero">
                              <g>
                                  <g>
                                      <path d="M17.886 3.106c-.149-.144-.387-.14-.53.007L9.857 10.61c-.336.326.193.867.53.53l7.498-7.497c.152-.147.152-.39 0-.537zM8.139 12.85c-.148-.144-.386-.14-.53.008L.111 20.355c-.344.335.192.88.53.53L8.14 13.39c.153-.148.153-.392 0-.539zM.642 3.114c-.329-.33-.869.189-.531.53l17.245 17.241c.345.351.88-.183.53-.53L.642 3.113z" transform="translate(-317 -19) translate(317 16)"/>
                                  </g>
                              </g>
                          </g>
                      </g>
                    </svg>
                  </a>',
                  esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                  esc_html__( 'Remove this item', 'woocommerce' ),
                  esc_attr( $product_id ),
                  esc_attr( $_product->get_sku() )
                ),
                $cart_item_key
              );
            ?>
          </div>
					<?php
				}
			}
			?>
			<?php do_action( 'woocommerce_cart_contents' ); ?>



					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>

</div>