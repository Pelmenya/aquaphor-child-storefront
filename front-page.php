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
    <?php $product_id = 531;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <img class="promo__pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" alt="<?php echo $title;?>">
    <div class="promo__description">
      <h1 class="promo__title">Система водоочистки для всей семьи</h1>
      <h2 class="promo__sub-title">
        Встречайте универсальное решение, которое будет полезно для каждого жителя в вашем доме.
      </h2>
      <ul class="promo__records">
        <li class="promo__record">Экономия воды и ресурсов</li>
        <li class="promo__record">Простая настройка</li>
        <li>Компактный дизайн</li>
      </ul>
    </div>


  </div>
</section>
<section class="services">
  <h2 class="services__title">Услуги</h2>
  <div class="services__container">
    <div class="services__service">
      <h3 class="services__title-service">БЕСПЛАТНАЯ&nbsp;ДОСТАВКА</h3>
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

<section class="certificates">
<h2 class="certificates__title">Сертификаты</h2>
  <div class="certificates__container">

    <div class="certificate__container">
      <img class="certificate__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/04/nsf_logo.png" alt="Сертификат NSF">
      <div class="certificate__description">
        <h3 class="certificate__title">Сертификат NSF</h3>
        <p class="certificate__about">Американский стандарт качества</p>
      </div>
    </div>

    <div class="certificate__container">
      <img class="certificate__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/04/iso_9001.png" alt="Сертификат ISO">
      <div class="certificate__description">
        <h3 class="certificate__title">Сертификат ISO</h3>
        <p class="certificate__about">Международный стандарт качества (9001:2015)</p>
      </div>
    </div>

    <div class="certificate__container">
      <img class="certificate__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/04/iso_45001.png" alt="Сертификат ISO">
      <div class="certificate__description">
        <h3 class="certificate__title">Сертификат ISO</h3>
        <p class="certificate__about">Международный стандарт качества (45001:2018)</p>
      </div>
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
</main>
<?php

get_footer();

?>