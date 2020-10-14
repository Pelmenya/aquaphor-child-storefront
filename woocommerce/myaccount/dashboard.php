<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<p>
	<?php
/*	printf(
		/* translators: 1: user display name 2: logout url */
	/*	wp_kses( __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), $allowed_html ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
  );*/
	?>
</p>

<p class="display-none-smart-phone">
	<?php
	/* translators: 1: Orders URL 2: Address URL 3: Account URL. */
	$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
	if ( wc_shipping_enabled() ) {
		/* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
		$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
	}
	printf(
		wp_kses( $dashboard_desc, $allowed_html ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
	?>
</p>

<?php
  /**
   * SmartPhone menu bar
   *
   */
?>
<div class="popup popup-more-smart-phone popup-more-smart-phone_my-account">
  <div class="popup-more-smart-phone__content">
    <?php echo '<h1 class="entry-title">'. 'Добро пожаловать, ' . esc_html( $current_user->display_name ) . '!</h1>'; ?>
    <div class="menu-smart-phone">
      <div class="menu-smart-phone__links-wrapper">
        <a href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-account' ) ); ?>" class="menu-smart-phone__item">
          <div class="menu-smart-phone__item menu-smart-phone__item_initilal-width">
            <div class="menu-smart-phone__icon menu-smart-phone__icon-rect"></div>
            <p class="menu-smart-phone__link-text">Редактировать профиль</p>
          </div>
          <svg width="6" height="11" viewBox="0 0 6 11">
            <path fill="#28293C" d="M4.19 5.5L.22 9.659c-.293.307-.293.804 0 1.11.293.308.767.308 1.06 0l4.5-4.713c.293-.307.293-.805 0-1.112L1.28.23C.987-.077.513-.077.22.23c-.293.307-.293.804 0 1.111L4.19 5.5z"/>
          </svg>
        </a>
        <a href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>" class="menu-smart-phone__item">
          <div class="menu-smart-phone__item menu-smart-phone__item_initilal-width">
            <div class="menu-smart-phone__icon menu-smart-phone__icon-rect"></div>
            <p class="menu-smart-phone__link-text">История заказов</p>
          </div>
          <svg width="6" height="11" viewBox="0 0 6 11">
            <path fill="#28293C" d="M4.19 5.5L.22 9.659c-.293.307-.293.804 0 1.11.293.308.767.308 1.06 0l4.5-4.713c.293-.307.293-.805 0-1.112L1.28.23C.987-.077.513-.077.22.23c-.293.307-.293.804 0 1.111L4.19 5.5z"/>
          </svg>
        </a>
        <a href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-address/billing' ) ); ?>" class="menu-smart-phone__item">
          <div class="menu-smart-phone__item menu-smart-phone__item_initilal-width">
            <div class="menu-smart-phone__icon menu-smart-phone__icon-rect"></div>
            <p class="menu-smart-phone__link-text">Адрес доставки</p>
          </div>
          <svg width="6" height="11" viewBox="0 0 6 11">
            <path fill="#28293C" d="M4.19 5.5L.22 9.659c-.293.307-.293.804 0 1.11.293.308.767.308 1.06 0l4.5-4.713c.293-.307.293-.805 0-1.112L1.28.23C.987-.077.513-.077.22.23c-.293.307-.293.804 0 1.111L4.19 5.5z"/>
          </svg>
        </a>
        <a href="<?php echo esc_url( wc_logout_url() )?>" class="menu-smart-phone__item">
          <div class="menu-smart-phone__item menu-smart-phone__item_initilal-width">
            <div class="menu-smart-phone__icon menu-smart-phone__icon-rect"></div>
            <p class="menu-smart-phone__link-text">Выйти</p>
          </div>
          <svg width="6" height="11" viewBox="0 0 6 11">
            <path fill="#28293C" d="M4.19 5.5L.22 9.659c-.293.307-.293.804 0 1.11.293.308.767.308 1.06 0l4.5-4.713c.293-.307.293-.805 0-1.112L1.28.23C.987-.077.513-.077.22.23c-.293.307-.293.804 0 1.111L4.19 5.5z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
