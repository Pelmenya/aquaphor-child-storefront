<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>
<main class="main">
<section class="promo">
  <div class="promo__content">
    <div class="promo__description">
      <h1 class="promo__title">Современное решение традиционных проблем</h1>
      <p class="promo__records">
        Встречайте универсальное решение, которое подарит премиальное качество
        воды для кажджого члена вашей семьи.
      </p>
      <button class="promo__button">
      <svg class="promo__button-pic" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <g>
          <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256
            C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z" fill="white"/>
          <path d="M353.661,237.879l-154.174-89.594c-16.844-9.969-32.987-1.938-32.987,17.844v179.766c0,19.75,16.143,27.797,32.987,17.812
            l152.956-89.578C369.348,264.16,370.552,247.848,353.661,237.879z" fill="white"/>
        </g>
      </svg>
      <span>Узнать больше</span>
      </button>
    </div>
    <img class="promo__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/Bitmap.png" alt="Комплексные системы водоочистки">
  </div>
</section>
<section class="services">
  <h2 class="services__title">Услуги</h2>
  <div class="services__container">

    <div class="services__service">
      <h3 class="services__title-service">БЫСТРАЯ&nbsp;ДОСТАВКА</h3>
      <p class="services__service-description">
        Текст об условиях бесплатной доставки
      </p>
    </div>

    <div class="services__service">
      <h3 class="services__title-service">БЕСПЛАТНАЯ&nbsp;УСТАНОВКА</h3>
      <p class="services__service-description">
        Текст о монтаже и установке
      </p>
    </div>

    <div class="services__service">
      <h3 class="services__title-service">ГАРАНТИЯ&nbsp;5&nbsp;ЛЕТ</h3>
      <p class="services__service-description">
        Текст об условиях гарантии на Waterboss
      </p>
    </div>
    
  </div>
</section>
<section class="top-products">
  <div class="top-products__grid-container">
    <?php $product_id = 531;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <a class="top-products__sales-leader" href="<?php echo get_page_link($product_id)?>">
    <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" class="top-products__pic-big" alt="<?php echo $title;?>">
      <h2 class="top-products__title">Лидеры&nbsp;продаж</h2>
      <div class="top-products__about-product">
        <h4 class="top-products__product-title"><?php echo $title;?></h4>
        <p class="top-products__product-price"><?php echo $product->get_price_html(); ?></p>
      </div>
    </a>
    <?php $product_id = 695;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <a class="top-products__top-product1" href="<?php echo get_page_link($product_id)?>">
      <div class="top-products__wrap">
        <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" class="top-products__pic-small" alt="<?php echo $title;?>">
      </div>
      <div class="top-products__about-product">
        <h4 class="top-products__product-title top-products__product-title_black_small"><?php echo $title;?></h4>
        <p class="top-products__product-price top-products__product-price_black_small"><?php echo $product->get_price_html(); ?></p>
      </div>
    </a>
    <?php $product_id = 543;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <a class="top-products__top-product2" href="<?php echo get_page_link($product_id)?>">
      <div class="top-products__wrap">
        <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" class="top-products__pic-small" alt="<?php echo $title;?>">
        <div class="top-products__about-product">
          <h4 class="top-products__product-title top-products__product-title_black_small"><?php echo $title;?></h4>
          <p class="top-products__product-price top-products__product-price_black_small"><?php echo $product->get_price_html(); ?></p>
        </div>
      </div>
    </a>
    <?php $product_id = 545;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <a class="top-products__top-product3" href="<?php echo get_page_link($product_id)?>">
      <div class="top-products__wrap">
        <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" class="top-products__pic-small" alt="<?php echo $title;?>">
        <div class="top-products__about-product">
          <?php $product =  wc_get_product($product_id);?>
          <h4 class="top-products__product-title top-products__product-title_white_small"><?php echo $title;?></h4>
          <p class="top-products__product-price top-products__product-price_white_small"><?php echo $product->get_price_html(); ?></p>
        </div>
      </div>
    </a>
    <?php $product_id = 543;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <a class="top-products__top-product4" href="<?php echo get_page_link($product_id)?>">
      <div class="top-products__wrap">
        <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" class="top-products__pic-small" alt="<?php echo $title;?>">
        <div class="top-products__about-product">
          <h4 class="top-products__product-title top-products__product-title_black_small"><?php echo $title;?></h4>
          <p class="top-products__product-price top-products__product-price_black_small"><?php echo $product->get_price_html(); ?></p>
        </div>
      </div>
    </a>
    <?php $product_id = 554;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <a class="top-products__top-product5" href="<?php echo get_page_link($product_id)?>">
      <div class="top-products__wrap">
        <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" class="top-products__pic-small" alt="<?php echo $title;?>">
        <div class="top-products__about-product">
          <h4 class="top-products__product-title top-products__product-title_white_small"><?php echo $title;?></h4>
          <p class="top-products__product-price top-products__product-price_white_small"><?php echo $product->get_price_html(); ?></p>
        </div>
      </div>
    </a>
  </div>
</section>

<section class="certificates">
<h2 class="certificates__title">Сертификаты</h2>
  <div class="certificates__container">

    <div class="certificate__container">
      <img class="certificate__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/nsf_logo.png" alt="Сертификат NSF">
      <div class="certificate__description">
        <h3 class="certificate__title">Сертификат NSF</h3>
        <p class="certificate__about">Американский стандарт качества</p>
      </div>
    </div>

    <div class="certificate__container">
      <img class="certificate__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/iso_9001.png" alt="Сертификат ISO">
      <div class="certificate__description">
        <h3 class="certificate__title">Сертификат ISO</h3>
        <p class="certificate__about">Международный стандарт качества (9001:2015)</p>
      </div>
    </div>

    <div class="certificate__container">
      <img class="certificate__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/iso_45001.png" alt="Сертификат ISO">
      <div class="certificate__description">
        <h3 class="certificate__title">Сертификат ISO</h3>
        <p class="certificate__about">Международный стандарт качества (45001:2018)</p>
      </div>
    </div>

  </div>
</section>
</main>
<?php

get_footer();

?>