<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>

<?php if ( $has_orders ) : ?>

	<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table display-none-smart-phone">
		<thead>
			<tr>
				<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
					<th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ( $customer_orders->orders as $customer_order ) {
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				$item_count = $order->get_item_count() - $order->get_item_count_refunded();
				?>
				<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
					<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
						<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( 'order-number' === $column_id ) : ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
									<?php echo esc_html( _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number() ); ?>
								</a>

							<?php elseif ( 'order-date' === $column_id ) : ?>
								<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php
								/* translators: 1: formatted order total 2: total order items */
								echo wp_kses_post( sprintf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) );
								?>

							<?php elseif ( 'order-actions' === $column_id ) : ?>
								<?php
								$actions = wc_get_account_orders_actions( $order );

								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
										echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
									}
								}
								?>
							<?php endif; ?>
						</td>
					<?php endforeach; ?>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'woocommerce' ); ?></a>
			<?php endif; ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

<?php else : ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php esc_html_e( 'Browse products', 'woocommerce' ); ?></a>
		<?php esc_html_e( 'No order has been made yet.', 'woocommerce' ); ?>
	</div>
<?php endif; ?>

<?php
/**
 * Версия для смартфонов
*/
?>

<?php if ( $has_orders ) : ?>
  <?php
    $orders = array();
    $i = 0;
    foreach ( $customer_orders->orders as $customer_order ) {
      $order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
      $item_count = $order->get_item_count() - $order->get_item_count_refunded();
      $orders[$i]["order_number"] = $order->get_order_number();
			$orders[$i]["item_count"] = $order->get_item_count() - $order->get_item_count_refunded();
			$orders[$i]["status_slug"] = $order->get_status();
      $orders[$i]["status_label_display"] = esc_html( wc_get_order_status_name( $order->get_status() ) );
      $orders[$i]["url"] = $order->get_view_order_url();
      $keys = explode(".", esc_html( wc_format_datetime( $order->get_date_created() ) ));
      switch ($keys[1]){
        case "01": $month = " января, ";
          break;
        case "02": $month = " февраля, ";
          break;
        case "03": $month = " марта, ";
          break;
        case "04": $month = " апреля, ";
          break;
        case "05": $month = " мая, ";
          break;
        case "06": $month = " июня, ";
          break;
        case "07": $month = " июля, ";
          break;
        case "08": $month = " августа, ";
          break;
        case "09": $month = " сентября , ";
          break;
        case "10": $month = " октября, ";
          break;
        case "11": $month = " ноября, ";
          break;
        case "12": $month = " декабря, ";
          break;
      };
      $orders[$i]["data"] = $keys[0] . $month . $keys[2];
      $orders[$i]["datatime"] = esc_attr( $order->get_date_created()->date( 'c' ) );
      $orders[$i]["order_total"] = $order->get_formatted_order_total();
      $i++;
    }
    ?>
<?php endif; ?>
<?php
/**
 *  Вывод заказов
 *  Если дата одна и тажа - не выводим ее
 *
 * */
?>
  <section class="orders-smart-phone">
  <h1 class="orders-smart-phone__title">Заказы</h1>

  <?php for($i = 0; $i < count($orders); ++$i) { ?>
    <time class="orders-smart-phone__data <?php
      if ($i!=0) {
        if (strcasecmp($orders[$i-1]["data"], $orders[$i]["data"]) == 0)
         echo "orders-smart-phone__data_is-closed";
      };
      ?>" datetime="<?php echo $orders[$i]["datatime"];?>"><?php echo $orders[$i]["data"];?></time>
    <a href="<?php echo $orders[$i]["url"];?>" class="orders-smart-phone__card">
      <div class="orders-smart-phone__wrap-col">
        <h6 class="orders-smart-phone__order">Заказ #<?php echo $orders[$i]["order_number"]?></h6>
        <p class="orders-smart-phone__total-price
        <?php
          if (strcasecmp($orders[$i]["status_label_display"], "ОТМЕНЕН") == 0) echo "orders-smart-phone__total-price_grey";
        ?>"><?php echo $orders[$i]["order_total"]?></p>
      </div>
      <button class="orders-smart-phone__status orders-smart-phone__status_blue
        <?php
          if (strcasecmp($orders[$i]["status_label_display"], "ВЫПОЛНЕН") == 0) echo "orders-smart-phone__status_green";
          if (strcasecmp($orders[$i]["status_label_display"], "ОТМЕНЕН") == 0) echo "orders-smart-phone__status_red";
        ?>">
        <?php echo $orders[$i]["status_label_display"];?>
      </button>
    </a>
    <?php
    };
  ?>
  </section>
