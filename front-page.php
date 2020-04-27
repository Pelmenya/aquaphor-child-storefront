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
    <h2 class="promo__title">Банер</h2>

  </div>
</section>
<section class="services">
  <h2 class="services__title">Услуги</h2>
  <div class="services__grid-container">
    <div class="services__service1">
      <h3 class="services__title-service">БЕСПЛАТНАЯ&nbsp;ДОСТАВКА</h3>

    </div>
    <div class="services__service2">
      <h3 class="services__title-service">БЫСТРЫЙ&nbsp;МОНТАЖ</h3>

    </div>
    <div class="services__service3">
      <h3 class="services__title-service">ГАРАНТИЯ&nbsp;5&nbsp;ЛЕТ</h3>
    </div>
  </div>
</section>
<section class="top-products">
  <div class="top-products__grid-container">

    <a class="top-products__sales-leader" href="<?php echo SITE_URL?>product/waterboss-700/">
      <img  class="top-products__pic-big" src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-94106.png" alt="Комплексная система очистки воды WATERBOSS 700">
      <h2 class="top-products__title">Лидеры&nbsp;продаж</h2>
    </a>
    <a class="top-products__top-product1" href="<?php echo SITE_URL?>product/фирменная-соль-аквафор/">
      <div class="top-products__wrap">
        <img  src="<?php echo SITE_URL?>wp-content/uploads/2020/04/salt-aquaphor.jpg" class="top-products__pic-small" alt="Фирменная соль Аквафор">
      </div>
    </a>
    <a class="top-products__top-product2" href="<?php echo SITE_URL?>product/корпус-аквафор-гросс-20/">
      <div class="top-products__wrap">
        <img  src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="top-products__pic-small" alt="Корпус аквафор Гросс-20">
      </div>
    </a>
    <a class="top-products__top-product3" href="<?php echo SITE_URL?>product/корпус-аквафор-викинг/">
      <div class="top-products__wrap">
        <img  src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-0a088.png" class="top-products__pic-small" alt="Корпус Аквафор Викинг">
      </div>
    </a>
    <a class="top-products__top-product4" href="<?php echo SITE_URL?>product/корпус-аквафор-гросс-20/">
      <div class="top-products__wrap">
        <img  src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="top-products__pic-small" alt="Корпус аквафор Гросс-20">
      </div>
    </a>
    <a class="top-products__top-product5" href="<?php echo SITE_URL?>product/аквафор-dwm-101s-морион/">
      <div class="top-products__wrap">
        <img  src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-80f73.png" class="top-products__pic-small" alt="Аквафор dwm-101s Морион/">
      </div>
    </a>
  </div>
</section>
</main>









<?php

get_footer();

?>