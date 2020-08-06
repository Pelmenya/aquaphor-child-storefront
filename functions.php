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



if( ! defined('AQUAPHOR_THEME_VERSION') )       define('AQUAPHOR_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
if( ! defined('AQUAPHOR_THEME_PATH') )          define('AQUAPHOR_THEME_PATH', get_template_directory() );
if( ! defined('AQUAPHOR_THEME_URL') )           define('AQUAPHOR_THEME_URL', get_template_directory_uri() );
if( ! defined('AQUAPHOR_THEME_ASSETS') )        define('AQUAPHOR_THEME_ASSETS', get_template_directory() . '/assets' );

if( ! defined('SITE_URL') )                     define('SITE_URL', get_site_url() . '/' );
if( ! defined('AQUAPHOR_THEME_JS') )            define('AQUAPHOR_THEME_JS', get_theme_root_uri() . '/aquaphor-child-storefront/assets/js/pages/' );
if( ! defined('AQUAPHOR_THEME_JS_BLOCKS') )            define('AQUAPHOR_THEME_JS_BLOCKS', get_theme_root_uri() . '/aquaphor-child-storefront/assets/js/blocks/' );
if( ! defined('AQUAPHOR_THEME_JS_FUNCTIONS') )  define('AQUAPHOR_THEME_JS_FUNCTIONS', get_theme_root_uri() . '/aquaphor-child-storefront/assets/js/functions/' );
if( ! defined('AQUAPHOR_THEME_JS_WIDGETS') )  define('AQUAPHOR_THEME_JS_WIDGETS', get_theme_root_uri() . '/aquaphor-child-storefront/assets/js/widgets/' );

if( ! defined('AQUAPHOR_THEME_CSS') )           define('AQUAPHOR_THEME_CSS', get_theme_root_uri() . '/aquaphor-child-storefront/assets/css/pages/' );


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

// отключили хлебные крошки ВЕЗДЕ КРОМЕ страницы товара и категорий
function woocommerce_breadcrumb( $args = array() ) {
  if ((is_product()) || (is_product_category())){

  $args = wp_parse_args(
		$args,
		apply_filters(
			'woocommerce_breadcrumb_defaults',
			array(
				'delimiter'   => '&nbsp;&#47;&nbsp;',
				'wrap_before' => '<nav class="woocommerce-breadcrumb">',
				'wrap_after'  => '</nav>',
				'before'      => '',
				'after'       => '',
				'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
			)
		)
	);

	$breadcrumbs = new WC_Breadcrumb();

	if ( ! empty( $args['home'] ) ) {
		$breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
	}

	$args['breadcrumb'] = $breadcrumbs->generate();

	/**
	 * WooCommerce Breadcrumb hook
	 *
	 * @hooked WC_Structured_Data::generate_breadcrumblist_data() - 10
	 */
	do_action( 'woocommerce_breadcrumb', $breadcrumbs, $args );

  wc_get_template( 'global/breadcrumb.php', $args );
  }
}


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

  //unset($array['billing']);
 	unset($array['shipping']);

  return $array;
}

add_filter( 'woocommerce_my_account_get_addresses', 'aquaphor_remove_billing_adress_my_account_menu', 10, 2 );



function custom_override_checkout_fields( $fields ) {
  //unset($fields['billing']['billing_last_name']);
  // unset($fields['billing']['billing_company']);
  // unset($fields['billing']['billing_address_1']);
  unset($fields['billing']['billing_address_2']);
  // unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_country']);
  // unset($fields['billing']['billing_state']);
  // unset($fields['billing']['billing_phone']);
  // unset($fields['order']['order_comments']);
  // unset($fields['billing']['billing_email']);
  //unset($fields['account']['account_username']);
  // unset($fields['account']['account_password']);
  // unset($fields['account']['account_password-2']);

  return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );




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

function woocommerce_output_related_products() {

	$args = array(
		'posts_per_page' => 1,
		'columns'        => 1,
		'orderby'        => 'rand', // @codingStandardsIgnoreLine.
	);

	woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
}

function aquaphor_custom_tracking( $order_id ) {
  // Получаем информации по заказу
  $order = wc_get_order( $order_id );
  $order_data = $order->get_data();
  // Получаем базовую информация по заказу
  $order_id = $order_data['id'];
  $order_currency = $order_data['currency'];
  $order_payment_method_title = $order_data['payment_method_title'];
  $order_shipping_totale = $order_data['shipping_total'];
  $order_total = $order_data['total'];
  $order_base_info = "<hr><strong>Общая информация по заказу</strong><br>
  ID заказа: $order_id<br>
  Валюта заказа: $order_currency<br>
  Метода оплаты: $order_payment_method_title<br>
  Стоимость доставки: $order_shipping_totale<br>
  Итого с доставкой: $order_total<br>";
  // Получаем информация по клиенту
  $order_customer_id = $order_data['customer_id'];
  $order_customer_ip_address = $order_data['customer_ip_address'];
  $order_billing_first_name = $order_data['billing']['first_name'];
  $order_billing_last_name = $order_data['billing']['last_name'];
  $order_billing_email = $order_data['billing']['email'];
  $order_billing_phone = $order_data['billing']['phone'];
  $order_client_info = "<hr><strong>Информация по клиенту</strong><br>
  ID клиента = $order_customer_id<br>
  IP адрес клиента: $order_customer_ip_address<br>
  Имя клиента: $order_billing_first_name<br>
  Фамилия клиента: $order_billing_last_name<br>
  Email клиента: $order_billing_email<br>
  Телефон клиента: $order_billing_phone<br>";
  echo $order_client_info;
  // Получаем информацию по доставке
  $order_shipping_address_1 = $order_data['shipping']['address_1'];
  $order_shipping_address_2 = $order_data['shipping']['address_2'];
  $order_shipping_city = $order_data['shipping']['city'];
  $order_shipping_state = $order_data['shipping']['state'];
  $order_shipping_postcode = $order_data['shipping']['postcode'];
  $order_shipping_country = $order_data['shipping']['country'];
  $order_shipping_info = "<hr><strong>Информация по доставке</strong><br>
  Страна доставки: $order_shipping_state<br>
  Город доставки: $order_shipping_city<br>
  Индекс: $order_shipping_postcode<br>
  Адрес доставки 1: $order_shipping_address_1<br>
  Адрес доставки 2: $order_shipping_address_2<br>";
  // Получаем информации по товару
  $order->get_total();
  $line_items = $order->get_items();
  foreach ( $line_items as $item ) {
    $product = $order->get_product_from_item( $item );
    $sku = $product->get_sku(); // артикул товара
    $id = $product->get_id(); // id товара
    $name = $product->get_name(); // название товара
    $description = $product->get_description(); // описание товара
    $stock_quantity = $product->get_stock_quantity(); // кол-во товара на складе
    $qty = $item['qty']; // количество товара, которое заказали
    $total = $order->get_line_total( $item, true, true ); // стоимость всех товаров, которые заказали, но без учета доставки
    $product_info[] = "<hr><strong>Информация о товаре</strong><br>
    Название товара: $name<br>
    ID товара: $id<br>
    Артикул: $sku<br>
    Описание: $description<br>
    Заказали (шт.): $qty<br>
    Наличие (шт.): $stock_quantity<br>
    Сумма заказа (без учета доставки): $total;";
  }
  $product_base_infо = implode('<br>', $product_info);
  $subject = "Заказ с сайта № $order_id";
  // Формируем URL в переменной $queryUrl для отправки сообщений в лиды Битрикс24
  $queryUrl = 'https://workwater.bitrix24.ru/rest/350/df6z0ht7a2kcveee/crm.lead.add.json';
  //$queryUrl = 'https://workwater.bitrix24.ru/rest/596/am0ypoebtnyl0gxj/crm.lead.add.json';
  // Формируем параметры для создания лида в переменной $queryData
  $queryData = http_build_query(array(
    'fields' => array(
      'TITLE' => $subject,
      'COMMENTS' => $order_base_info.' '.$order_client_info.' '.$order_shipping_info.' '.$product_base_infо
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y")
  ));
  // Обращаемся к Битрикс24 при помощи функции curl_exec
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
  $result = json_decode($result, 1);
  if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: ".$result['error_description']."<br>";
}

add_action( 'woocommerce_thankyou', 'aquaphor_custom_tracking' );

function aquaphor_theme_scripts() {
  /* Путь к странице*/
  $url = $_SERVER['REQUEST_URI'];
  $url = explode('?', $url);

  /* Путь до параметров запроса */
  $url_str = substr($url[0], 0, -1);

  /* Параметры запроса */

  $url_query = $url[1];

  $url_discounts = '/discounts';
  $url_my_account = '/my-account';
  $url_my_account_lost_password = '/my-account/lost-password';
	$url_my_account_edit_address = '/my-account/edit-address';
  $url_my_account_edit_address_shiping = '/my-account/edit-address/shipping';
  $url_my_account_edit_address_billing = '/my-account/edit-address/billing';

  $url_my_account_orders = '\/my-account\/orders';
  $url_my_account_view_order = '\/my-account\/view-order';
  $url_my_account_edit_account = '/my-account/edit-account';
  $url_cart = '/cart';
  $url_checkout_order_received='\/checkout\/order-received';

/* Заметка про кириллицу и ярлык (слаг)
Если у вас на сайте кириллица не меняется на латиницу - нет плагина Cyr-To-Lat или ему подобного,
то при создании записи её ярлык изменяется и кириллица превращается в спец символы
(контакты - %d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b), поэтому при проверке нужно это учитывать.
Т.е. если проверяется не заголовок, а ярлык (post_name), то делайте так:
is_page('о-сайте');  неправильно
is_page( sanitize_title('о-сайте') );  правильно  */
  if (is_page( 'contacts' ) ){
    wp_enqueue_style( 'contacts', AQUAPHOR_THEME_CSS . 'contacts.css', array(), '1.1', 'all');
  }

  if (strcasecmp($url_str, $url_discounts) == 0){
    wp_enqueue_script('discounts-script', AQUAPHOR_THEME_JS . 'discounts/index.js', true);
  }

  if (is_page( array('delivery', 'payment', 'guarantees', 'about-company', 'water-analysis', 'equipment-selection', 'repair' ) ) ){
    wp_enqueue_style( 'is-page', AQUAPHOR_THEME_CSS . 'is_page.css', array(), '1.1', 'all');
  }

  if (is_page( 'equipment-selection' ) ){
    wp_enqueue_script('equipment-selection', AQUAPHOR_THEME_JS . 'equipment-selection/index.js', true);
  }

  if (strcasecmp($url_str, $url_cart) == 0){
    wp_enqueue_script( 'custom', AQUAPHOR_THEME_JS . 'cart/index.js', array('jquery') );
  }

  if (strcasecmp($url_str, $url_my_account) == 0){
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/index.js', true);
  }

  if ((strcasecmp($url_str, $url_my_account_edit_account) == 0)&&(strcasecmp($url_query, '') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . '/my-account/edit-account/index.js', true);
  }

  if ((preg_match("/$url_my_account_orders/i", $url_str))&&(strcasecmp($url_query, '') == 0)) {
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

  if ((strcasecmp($url_str, $url_my_account_edit_address_billing) == 0)&&(strcasecmp($url_query, '') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/edit-address/billing/index.js', true);
  }


	if ((strcasecmp($url_str, $url_my_account_lost_password) == 0)&&(strcasecmp($url_query, '') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/lost-password/index.js', true);
  }

  if ((strcasecmp($url_str, $url_my_account_lost_password) == 0)&&(strcasecmp($url_query, 'show-reset-form=true') == 0)) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/lost-password/show-reset-form/index.js', true);
  }

  if (is_product()) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'product/index.js', true);
    wp_enqueue_style( 'is-product-attribute', AQUAPHOR_THEME_CSS . 'is-product-attribute.css', array(), '1.1', 'all');
  }

  if (is_product_category()) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'product-category/index.js', true);
    wp_enqueue_style( 'is-product', AQUAPHOR_THEME_CSS . 'product.css', array(), '1.1', 'all');
    wp_enqueue_style( 'is-product-category', AQUAPHOR_THEME_CSS . 'product-category.css', array(), '1.1', 'all');
  }

  if (is_shop()) {
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'product-category/index.js', true);
  }

  if (is_checkout()){
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'checkout/index.js', true);
    wp_enqueue_script( 'amount', AQUAPHOR_THEME_JS_FUNCTIONS . 'setAmountSetInterval.js', true);

    if (preg_match("/$url_checkout_order_received/i", $url_str)){
      wp_deregister_script('amount');
      wp_enqueue_script( 'new_index', AQUAPHOR_THEME_JS . 'checkout/checkout-order-received/index.js', true);
      wp_enqueue_script( 'amount', AQUAPHOR_THEME_JS_FUNCTIONS . 'setAmountSetInterval.js', true);
    }
  }

  if (is_front_page()){
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'front-page/index.js', true);
    wp_enqueue_style( 'front', AQUAPHOR_THEME_CSS . 'front-page.css', array(), '1.1', 'all');
  }
  wp_enqueue_script( 'ya_chat_widget', AQUAPHOR_THEME_JS_WIDGETS . 'ya-chat-widget.js', true);
  wp_enqueue_script( 'cart', AQUAPHOR_THEME_JS_FUNCTIONS . 'visibleCart.js', true);
  wp_enqueue_script( 'currency_symbol', AQUAPHOR_THEME_JS_FUNCTIONS . 'setCurrencySymbol.js', true);
  wp_enqueue_script( 'all-discounts', AQUAPHOR_THEME_JS . 'discounts/all-index.js', true);
  wp_enqueue_script( 'footer', AQUAPHOR_THEME_JS_BLOCKS . 'footer/index.js', true);
}

add_action( 'wp_footer', 'aquaphor_theme_scripts' );

add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));

