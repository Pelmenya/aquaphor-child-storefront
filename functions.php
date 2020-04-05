<?php
/**
 * aquaphor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aquaphor
 */

/**
 *  Константы путей
 *
 */

if( ! defined('AQUAPHOR_THEME_VERSION') )  define('AQUAPHOR_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
if( ! defined('AQUAPHOR_THEME_PATH') )     define('AQUAPHOR_THEME_PATH', get_template_directory() );
if( ! defined('AQUAPHOR_THEME_URL') )      define('AQUAPHOR_THEME_URL', get_template_directory_uri() );
if( ! defined('AQUAPHOR_THEME_ASSETS') )   define('AQUAPHOR_THEME_ASSETS', get_template_directory() . '/assets' );

if( ! defined('SITE_URL') )     define('SITE_URL', get_site_url() . '/' );
if( ! defined('AQUAPHOR_THEME_JS') )   define('AQUAPHOR_THEME_JS', get_theme_root_uri() . '/aquaphor-child-storefront/assets/js/pages/' );

/**
 *  Отключаем блоки в header
 *
 *
 */



if ( ! function_exists( 'storefront_product_search' ) ) {
    function storefront_product_search() {
        if ( storefront_is_woocommerce_activated() ) {
           ?>
           <?php
        }
    }
}

if ( ! function_exists( 'storefront_site_branding' ) ) {
	function storefront_site_branding() {
		?>
    <?php
	}
}

if ( ! function_exists( 'storefront_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_primary_navigation() {
		?>
		<?php
	}
}

if ( ! function_exists( 'storefront_secondary_navigation' ) ) {
	/**
	 * Display Secondary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_secondary_navigation() {
		if ( has_nav_menu( 'secondary' ) ) {
			?>
			<?php
		}
	}
}

if ( ! function_exists( 'storefront_cart_link' ) ) {
	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 *
	 * @return void
	 * @since  1.0.0
   *
   * Переопределил базовую функцию для вывода числа товаров
	 */
	function storefront_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
				<?php /* translators: %d: number of items in cart */ ?>
				 <span class="count"><?php echo wp_kses_data(  WC()->cart->get_cart_contents_count() ); ?></span>
			</a>
		<?php
	}
}

// отключили корзину в хедере
function storefront_header_cart() {}

// отключили хлебные крошки
function woocommerce_breadcrumb() {}


// сформировал нужное меню
function aquaphor_remove_my_account_links( $menu_links ){

	//unset( $menu_links['edit-address'] ); // Addresses
	unset( $menu_links['dashboard'] ); // Dashboard
	unset( $menu_links['payment-methods'] ); // Payment Methods
  //unset( $menu_links['orders'] ); // Orders
  if ( isset( $menu_links['edit-address'] ) ) {
     $menu_links['edit-address'] = 'Адрес' ;
	}
  unset( $menu_links['downloads'] ); // Downloads
	//unset( $menu_links['edit-account'] ); // Account details
	//unset( $menu_links['customer-logout'] ); // Logout

	return $menu_links;
}

add_filter ( 'woocommerce_account_menu_items', 'aquaphor_remove_my_account_links' );


function aquaphor_filter_woocommerce_cart_needs_shipping_new($needs_shipping) {
    if (is_cart()) return false;
    return true;
}

add_filter( 'woocommerce_cart_needs_shipping', 'aquaphor_filter_woocommerce_cart_needs_shipping_new');

// отключил платежный адрес

function aquaphor_remove_billing_adress_my_account_menu( $array, $customer_id ){

  unset($array['billing']);
 	//unset($array['shipping']);

  return $array;
}

add_filter( 'woocommerce_my_account_get_addresses', 'aquaphor_remove_billing_adress_my_account_menu', 10, 2 );


/*
function custom_override_checkout_fields( $fields ) {
  unset($fields['shipping']['shipping_first_name']);
  unset($fields['billing']['billing_last_name']);
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_address_1']);
  unset($fields['billing']['billing_address_2']);
  unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_state']);
  unset($fields['billing']['billing_phone']);
  unset($fields['order']['order_comments']);
  unset($fields['billing']['billing_email']);
  unset($fields['account']['account_username']);
  unset($fields['account']['account_password']);
  unset($fields['account']['account_password-2']);

  return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

*/


/**
 *  Регистрируем виджеты в header
 */
function aquaphor_widgets_init(){
  register_sidebar( array(
   'name'          => 'Header Top Widget',
   'id'            => 'header-top-widget',
   'class'         => 'header-top-widget',
   'before_widget' => '<div class="header-top-widget">',
   'after_widget'  => '</div>'
) );
  register_sidebar( array(
    'name'          => 'Header Widget',
    'id'            => 'header-widget',
    'class'         => 'header-widget',
    'before_widget' => '<div class="header-widget">',
    'after_widget'  => '</div>'
 ) );
};

add_action( 'widgets_init', 'aquaphor_widgets_init');

/**
 *  Грузим наши стили
 */

/**
 *  Грузим скрипт в в HEAD сайта
 */
function aquaphor_enqueue_styles() {

	$parent_style = 'parent-style'; // This is 'StoreFront - style' for the StoreFront theme.

 wp_enqueue_style( $parent_style, AQUAPHOR_THEME_URL . '/style.css' );
	wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style ),
			wp_get_theme()->get('Version')
	);
}

function aquaphor_theme_scripts() {
  /* Путь к странице*/
  $url = $_SERVER['REQUEST_URI'];
  $url = explode('?', $url);

  /* Путь до параметров запроса */
  $url_str = substr($url[0], 0, -1);

  /* Параметры запроса */

  $url_query = $url[1];


  $url_my_account = '/my-account';
  $url_my_account_lost_password = '/my-account/lost-password';
	$url_my_account_edit_address = '/my-account/edit-address';
  $url_my_account_edit_address_shiping = '/my-account/edit-address/shipping';
  $url_my_account_orders = '/my-account/orders';
  $url_my_account_view_order = '\/my-account\/view-order';
  $url_my_account_edit_account = '/my-account/edit-account';
  $url_cart = '/cart';


  if (strcasecmp($url_str, $url_cart) == 0){
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'cart/index.js', true);
  }

  if (strcasecmp($url_str, $url_my_account) == 0){
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/index.js', true);
  }

  if ((strcasecmp($url_str, $url_my_account_edit_account) == 0)&&(strcasecmp($url_query, '') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . '/my-account/edit-account/index.js', true);
  }

  if ((strcasecmp($url_str, $url_my_account_orders) == 0)&&(strcasecmp($url_query, '') == 0)) {
    if (is_user_logged_in()){
      wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/orders/index.js', true);
    } else wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/index.js', true);
  }
  /** Регулярное выражение на вхождение строки в адрес $url_my_account_view_order = '\/my-account\/view-order'
   * Экранирование слешей
  */
  if (preg_match("/$url_my_account_view_order/i", $url_str)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/view-order/index.js', true);
  }






  if ((strcasecmp($url_str, $url_my_account_edit_address) == 0)&&(strcasecmp($url_query, '') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/edit-address/index.js', true);
  }

  if ((strcasecmp($url_str, $url_my_account_edit_address_shiping) == 0)&&(strcasecmp($url_query, '') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/edit-address/shipping/index.js', true);
  }

	if ((strcasecmp($url_str, $url_my_account_lost_password) == 0)&&(strcasecmp($url_query, '') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/lost-password/index.js', true);
  }

  if ((strcasecmp($url_str, $url_my_account_lost_password) == 0)&&(strcasecmp($url_query, 'show-reset-form=true') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/lost-password/show-reset-form/index.js', true);
  }


}

add_action( 'wp_footer', 'aquaphor_theme_scripts' );
