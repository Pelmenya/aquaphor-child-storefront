<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">

	<?php do_action( 'storefront_before_header' ); ?>

  <?php

    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);

    $url_str = substr($url[0], 0, -1);
    $url_query = $url[1];

    if (strcasecmp($url_query, '') == 0)
         echo 'true' ;
    ?>
    <br>
    <?php

    echo $url_str;
    ?>
    <br>
    <?php
    echo $url_query;


  ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
    <div class="header">
      <div class="header__wrap header__wrap_top">
        <nav class="header__nav-top">
          <a href="<?php echo SITE_URL?>water-analysis" class="header__nav-item header__nav-item_page"><span>Анализ воды</span></a>
          <a href="<?php echo SITE_URL?>choice-devices" class="header__nav-item">Подбор оборудования</a>
          <a href="<?php echo SITE_URL?>service-support" class="header__nav-item">Сервисное обслуживание</a>
          <a href="<?php echo SITE_URL?>payment-and-delivery" class="header__nav-item">Оплата и доставка</a>
        </nav>
        <div class="header__container-flex">
          <span class="header__tel">+7&nbsp;(499)&nbsp;577&nbsp;03&nbsp;79</span>
          <span class="header__dealer">Официальный&nbsp;дилер</span>
        </div>
      </div>
      <div class="header__spliter"></div>

      <div class="header__wrap">

      <img class="header__logo" src="http://aquaphor.store/wp-content/uploads/2020/03/Aquaphor_logo.png" alt="Логотип компании Аквафор">
      <nav class="header__nav">
          <a href="<?php echo SITE_URL?>" class="header__nav-item header__nav-item_main header__nav-item_page">Системы</a>
          <a href="<?php echo SITE_URL?>" class="header__nav-item header__nav-item_main">Магистральные</a>
          <a href="<?php echo SITE_URL?>" class="header__nav-item header__nav-item_main">Обратный осмос</a>
          <a href="<?php echo SITE_URL?>" class="header__nav-item header__nav-item_main">Расходники</a>
          <a href="<?php echo SITE_URL?>" class="header__nav-item header__nav-item_main">Запчасти</a>
        </nav>

        <div class="header__search-container">
            <?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
        </div>

        <div class="header__basket-container">
          <span class="header__goods-count">
            <?php storefront_cart_link(); ?>
          </span>

          <div class="header__basket-popup">
            <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
          </div>
        </div>
        <a href="<?php echo SITE_URL?>my-account" class="header__nav-item header__nav-item_one">Личный кабинет</a>

      </div>
   </div>
   </header>


		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
