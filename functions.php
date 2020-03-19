<?php
/**
 * aquaphor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aquaphor
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

  if (is_page('my-account')){
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'my-account/index.js', true);
  }

  if (is_page('my-account/lost-password')){
    wp_enqueue_script( 'index', AQUAPHOR_THEME_JS . 'lost-password/index.js', true);
  }

}

add_action( 'wp_footer', 'aquaphor_theme_scripts' );
