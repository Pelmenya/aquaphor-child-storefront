<?php
/**
 * View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/view-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

get_template_part('inc/view_array');
get_template_part('inc/get_top_term');

defined( 'ABSPATH' ) || exit;

$notes = $order->get_customer_order_notes();

?>
<p>
<?php
printf(
	/* translators: 1: order number 2: order date 3: order status */
	esc_html__( 'Order #%1$s was placed on %2$s and is currently %3$s.', 'woocommerce' ),
	'<mark class="order-number">' . $order->get_order_number() . '</mark>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'<mark class="order-date">' . wc_format_datetime( $order->get_date_created() ) . '</mark>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'<mark class="order-status">' . wc_get_order_status_name( $order->get_status() ) . '</mark>' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
?>
</p>

<?php if ( $notes ) : ?>
	<h2><?php esc_html_e( 'Order updates', 'woocommerce' ); ?></h2>
	<ol class="woocommerce-OrderUpdates commentlist notes">
		<?php foreach ( $notes as $note ) : ?>
		<li class="woocommerce-OrderUpdate comment note">
			<div class="woocommerce-OrderUpdate-inner comment_container">
				<div class="woocommerce-OrderUpdate-text comment-text">
					<p class="woocommerce-OrderUpdate-meta meta"><?php echo date_i18n( esc_html__( 'l jS \o\f F Y, h:ia', 'woocommerce' ), strtotime( $note->comment_date ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<div class="woocommerce-OrderUpdate-description description">
						<?php echo wpautop( wptexturize( $note->comment_content ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</li>
		<?php endforeach; ?>
	</ol>
<?php endif; ?>

<?php do_action( 'woocommerce_view_order', $order_id ); ?>

<?php
$order_items           = $order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
$show_purchase_note    = $order->has_status( apply_filters( 'woocommerce_purchase_note_order_statuses', array( 'completed', 'processing' ) ) );
$show_customer_details = is_user_logged_in() && $order->get_user_id() === get_current_user_id();
$downloads             = $order->get_downloadable_items();
$show_downloads        = $order->has_downloadable_item() && $order->is_download_permitted();
?>


<div class="order-smart-phone cart-smart-phone">
<?php
  foreach ( $order_items as $item_id => $item ) {
    $product = $item->get_product();
      $product   = $item->get_product();
      $product_id = $product->id;
      if ( $product && $product->exists() ) {
        $is_visible        = $product && $product->is_visible();
        $product_permalink = apply_filters( 'woocommerce_order_item_permalink', $is_visible ? $product->get_permalink( $item ) : '', $item, $order );

        ?>
        <div class="cart-smart-phone__card">
          <a class="cart-smart-phone__pic" href="<?php echo $product_permalink?>">
            <img class="cart-smart-phone__pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" alt="<?php echo $product->get_title();?>">
          </a>
          <div class="cart-smart-phone__wrap">
            <h6 class="cart-smart-phone__title"><?php echo $product->get_title();?></h6>
            <p class="cart-smart-phone__category">
              <?php
                $top_category = get_top_term('product_cat', $product_id);
                echo $top_category->name;
              ?>
            </p>
            <div class="cart-smart-phone__wrap-row">
              <p class="cart-smart-phone__price"><?php	echo $order->get_formatted_line_subtotal( $item ); // PHPCS: XSS ok.?></p>
              <p class="cart-smart-phone__category"><?php $qty = $item->get_quantity(); echo $qty; ?> шт.</p>
            </div>
          </div>
      </div>
        <?php
      }
    }
?>
<?php
  foreach ( $order->get_order_item_totals() as $key => $total ) {
    if ('shipping' === $key ) {
      if ($total['value'] === 'Самовывоз') {
          $shipping_value = '0 руб';
          $shipping_name = 'Самовывоз';
        } else {
          $shipping = $total['value'];
          preg_match_all('/<span.*">(.*)<\/span>/', $shipping, $shipping_array);
          $shipping_value =  $shipping_array[0][0];
          $shipping_name = 'Курьером';
        }
    }
    if ('cart_subtotal' === $key){
      $cart_subtotal = $total['value'];
    }
    if ('order_total' === $key){
      $order_total = $total['value'];
    }

    if ('payment_method' === $key){
      $payment_method_value = $total['value'];
    }

  }
?>

      <div class="order-smart-phone__container">
        <div class=" checkout-smart-phone__wrap order-smart-phone__wrap">
          <p class="checkout-smart-phone__card-description">Товары</p>
          <div class="order-smart-phone__points checkout-smart-phone__points"></div>
          <div class="order-smart-phone__price checkout-smart-phone__price">
            <?php echo $cart_subtotal;?>
          </div>
        </div>
        <p class="order-smart-phone__text"><?php echo $payment_method_value;?></p>
        <div class="checkout-smart-phone__wrap order-smart-phone__wrap">
          <p class="checkout-smart-phone__card-description">Доставка</p>
          <div class="order-smart-phone__points checkout-smart-phone__points"></div>
          <div class="order-smart-phone__price checkout-smart-phone__price checkout-smart-phone__price_delivery">
            <?php echo $shipping_value?>
          </div>
        </div>
        <p class="order-smart-phone__text"><?php echo $shipping_name;?></p>
        <div class=" checkout-smart-phone__wrap order-smart-phone__wrap">
          <p class="checkout-smart-phone__card-description order-smart-phone__card-description">Итого:</p>
          <div class="order-smart-phone__points checkout-smart-phone__points"></div>
          <div class="checkout-smart-phone__price order-smart-phone__price">
            <?php echo $order_total;?>
          </div>
        </div>
      </div>
</div>





