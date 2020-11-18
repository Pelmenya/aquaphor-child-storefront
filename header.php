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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(64647832, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/64647832" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(65926714, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/65926714" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45195517-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-45195517-3');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(65052040, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/65052040" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type='text/javascript'> (function () {
  window['yandexChatWidgetCallback'] = function() {
    try { window.yandexChatWidget = new Ya.ChatWidget({
       guid: 'e82fee08-dfc6-4c36-9efa-67910d90c463',
       buttonText: 'Помощь',
       title: 'Помощь',
       theme: 'light',
       collapsedDesktop: 'never',
       collapsedTouch: 'always' });
       }
    catch(e) { } };
    var n = document.getElementsByTagName('script')[0],
    s = document.createElement('script');
    s.async = true;
    s.charset = 'UTF-8';
    s.src = 'https://yastatic.net/s3/chat/widget.js';
    n.parentNode.insertBefore(s, n);
     s.onload = ()=>{
      const helpBtn = document.querySelector('.header__help-button');
      const helpBtnTablet = document.querySelector('.header__top-item-chat');
      const helpBtnSmartPhone = document.querySelector('.popup-help-smart-phone__button');
      const yaChatWidget = document.querySelector('.ya-chat-widget');
      if (yaChatWidget){
      const yaChatButton = yaChatWidget.querySelector('.ya-chat-button');
      const yaChatHeaderClose = yaChatWidget.querySelector('.ya-chat-header__close');
      const yaChatWidgetMount = yaChatWidget.querySelector('.ya-chat-widget__mount');

      yaChatWidget.style.visibility = 'hidden';
      yaChatButton.classList.add('ya-chat-button_hidden');

      yaChatHeaderClose.addEventListener('click', () => {
      yaChatWidget.style.visibility = 'hidden';
      yaChatButton.classList.add('ya-chat-button_hidden');
      });

      function openYaChatWidget() {
        if (!yaChatWidgetMount.classList.contains('ya-chat-widget__mount_visible')) {
          const event = new Event('click', { bubbles: true, cancelable: true });
          yaChatWidget.style.visibility = 'visible';
          yaChatButton.dispatchEvent(event);
        }
      }
      if (helpBtn){
        helpBtn.addEventListener('click', openYaChatWidget);
      }
      if (helpBtnTablet){
        helpBtnTablet.addEventListener('click', openYaChatWidget);
      }
      if (helpBtnSmartPhone){
        helpBtnSmartPhone.addEventListener('click', openYaChatWidget);
      }
      }
    }
  })();
</script>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="module">
  import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js';
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">


<?php do_action( 'storefront_before_header' ); ?>

<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

    <?php
      get_template_part('template-parts/header/header-desktop-tablet');
      get_template_part('template-parts/header/header-smart-phone');
      get_template_part('template-parts/popups/popup-more-smart-phone');
      get_template_part('template-parts/popups/popup-help-smart-phone');
      get_template_part('template-parts/popups/popup-image');
      if (is_product()){
        get_template_part('template-parts/popups/popup-oneclick');
        get_template_part('template-parts/popups/popup-oneclick-smart-phone');
      }
    ?>

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
