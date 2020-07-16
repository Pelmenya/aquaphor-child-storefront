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
      <h1 class="promo__title">Системы очистки воды для коттеджей и квартир</h1>
      <p class="promo__records">
        Встречайте универсальное решение, которое подарит премиальное качество
        воды для кажджого члена вашей семьи.
      </p>
      <button class="promo__button">
      <svg class="promo__button-pic" width="16" height="16" viewBox="0 0 16 16">
        <path fill="#fff" d="M8 1c3.9 0 7 3.1 7 7s-3.1 7-7 7-7-3.1-7-7 3.1-7 7-7zM8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8v0z"></path>
        <path fill="#fff" d="M6 4v8l6-4z"></path>
      </svg>
      <span>Узнать больше</span>
      </button>
    </div>
    <img class="promo__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/head.png" alt="Комплексные системы водоочистки">
  </div>
</section>
<section class="services">
  <h2 class="services__title">Услуги</h2>
  <div class="services__container">
    <div class="services__wrap">
      <div class="services__icon">
        <div class="services__wrap">
          <svg width="16px" height="10px" viewBox="0 0 16 10">
            <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="81-mini-Essential-Icons" transform="translate(-381.000000, -144.000000)" fill="#141124" fill-rule="nonzero">
                    <g id="icon-" transform="translate(365.000000, 125.000000)">
                        <path d="M26.2196699,19.2196699 C26.5125631,18.9267767 26.9874369,18.9267767 27.2803301,19.2196699 L27.2803301,19.2196699 L31.2803301,23.2196699 C31.5732233,23.5125631 31.5732233,23.9874369 31.2803301,24.2803301 L31.2803301,24.2803301 L27.2803301,28.2803301 C26.9874369,28.5732233 26.5125631,28.5732233 26.2196699,28.2803301 C25.9267767,27.9874369 25.9267767,27.5125631 26.2196699,27.2196699 L26.2196699,27.2196699 L28.939,24.5 L16.75,24.5 C16.3703042,24.5 16.056509,24.2178461 16.0068466,23.8517706 L16,23.75 C16,23.3357864 16.3357864,23 16.75,23 L16.75,23 L28.939,23 L26.2196699,20.2803301 C25.9534034,20.0140635 25.9291973,19.5973998 26.1470518,19.3037883 Z" id="Shape"></path>
                    </g>
                </g>
            </g>
          </svg>
        </div>
      </div>
      <div class="services__service">
        <h3 class="services__title-service">БЫСТРАЯ&nbsp;ДОСТАВКА</h3>
        <p class="services__service-description"></p>
      </div>
    </div>
    <div class="services__wrap">
      <div class="services__icon">
        <div class="services__wrap">
          <svg width="18px" height="18px" viewBox="0 0 18 18">
            <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="81-mini-Essential-Icons" transform="translate(-380.000000, -256.000000)" fill="#000000">
                    <g id="icon-" transform="translate(365.000000, 241.000000)">
                        <path d="M15,15.7954545 C15,15.3579545 15.3563636,15 15.7954545,15 L19.7727273,15 C20.2118182,15 20.5681818,15.3579545 20.5681818,15.7954545 C20.5681818,16.2329545 20.2118182,16.5909091 19.7727273,16.5909091 L17.7156818,16.5909091 L21.9260227,20.7988636 C22.2370455,21.1090909 22.2370455,21.6181818 21.9260227,21.9284091 C21.615,22.2386364 21.1122727,22.2386364 20.80125,21.9284091 L16.5909091,17.7125 L16.5909091,19.7727273 C16.5909091,20.2102273 16.2345455,20.5681818 15.7954545,20.5681818 C15.3563636,20.5681818 15,20.2102273 15,19.7727273 L15,15.7954545 Z M27.7272727,15 L31.7045455,15 C32.1436364,15 32.5,15.3579545 32.5,15.7954545 L32.5,19.7727273 C32.5,20.2102273 32.1436364,20.5681818 31.7045455,20.5681818 C31.2654545,20.5681818 30.9090909,20.2102273 30.9090909,19.7727273 L30.9090909,17.7125 L26.69875,21.9284091 C26.3877273,22.2386364 25.885,22.2386364 25.5739773,21.9284091 C25.2629545,21.6181818 25.2629545,21.1090909 25.5739773,20.7988636 L29.7843182,16.5909091 L27.7272727,16.5909091 C27.2881818,16.5909091 26.9318182,16.2329545 26.9318182,15.7954545 C26.9318182,15.3579545 27.2881818,15 27.7272727,15 Z M21.9260227,25.5715909 C22.2370455,25.8818182 22.2370455,26.3909091 21.9260227,26.7011364 L17.7156818,30.9090909 L19.7727273,30.9090909 C20.2118182,30.9090909 20.5681818,31.2670455 20.5681818,31.7045455 C20.5681818,32.1420455 20.2118182,32.5 19.7727273,32.5 L15.7954545,32.5 C15.3563636,32.5 15,32.1420455 15,31.7045455 L15,27.7272727 C15,27.2897727 15.3563636,26.9318182 15.7954545,26.9318182 C16.2345455,26.9318182 16.5909091,27.2897727 16.5909091,27.7272727 L16.5909091,29.7875 L20.80125,25.5715909 C21.1122727,25.2613636 21.615,25.2613636 21.9260227,25.5715909 Z M25.5739773,25.5715909 C25.885,25.2613636 26.3877273,25.2613636 26.69875,25.5715909 L30.9090909,29.7875 L30.9090909,27.7272727 C30.9090909,27.2897727 31.2654545,26.9318182 31.7045455,26.9318182 C32.1436364,26.9318182 32.5,27.2897727 32.5,27.7272727 L32.5,31.7045455 C32.5,32.1420455 32.1436364,32.5 31.7045455,32.5 L27.7272727,32.5 C27.2881818,32.5 26.9318182,32.1420455 26.9318182,31.7045455 C26.9318182,31.2670455 27.2881818,30.9090909 27.7272727,30.9090909 L29.7843182,30.9090909 L25.5739773,26.7011364 C25.2629545,26.3909091 25.2629545,25.8818182 25.5739773,25.5715909 L25.5739773,25.5715909 Z" id="Fill-1033"></path>
                    </g>
                </g>
            </g>
          </svg>
        </div>
      </div>
      <div class="services__service">
        <h3 class="services__title-service">БЕСПЛАТНАЯ&nbsp;УСТАНОВКА</h3>
        <p class="services__service-description"></p>
      </div>
    </div>
    <div class="services__wrap">
      <div class="services__icon">
        <div class="services__wrap">
          <svg width="13px" height="10px" viewBox="0 0 13 10">
            <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="81-mini-Essential-Icons" transform="translate(-498.000000, -260.000000)" fill="#000000" fill-rule="nonzero">
                    <g id="icon-" transform="translate(481.000000, 241.000000)">
                        <path d="M23.5784276,28.4977954 C23.2221676,28.8095229 23.1860668,29.3510338 23.4977944,29.7072939 C23.8095219,30.0635539 24.3510328,30.0996546 24.7072928,29.7879271 L28.1358649,26.7879266 C28.516333,26.455017 28.5275111,25.8668317 28.1599668,25.5197065 L20.4456798,18.233991 C20.1015212,17.9089523 19.5590296,17.9244521 19.233991,18.2686106 C18.9089523,18.6127692 18.9244521,19.1552608 19.2686106,19.4802994 L26.2974517,26.1186493 L23.5784276,28.4977954 Z" id="Shape" transform="translate(23.714288, 24.000008) rotate(-270.000000) translate(-23.714288, -24.000008) "></path>
                    </g>
                </g>
            </g>
          </svg>
        </div>
      </div>
      <div class="services__service">
        <h3 class="services__title-service">ГАРАНТИЯ&nbsp;5&nbsp;ЛЕТ</h3>
        <p class="services__service-description"></p>
      </div>
    </div>
  </div>
</section>
<section class="top-products">
  <div class="top-products__grid-container">
    <?php $product_id = 529;
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
    <?php $product_id = 908;
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
    <?php $product_id = 727;
          $product =  wc_get_product( $product_id );
          $title = $product->get_title();
    ?>
    <a class="top-products__top-product2" href="<?php echo get_page_link($product_id)?>">
      <div class="top-products__wrap">
        <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );?>" class="top-products__pic-small" alt="<?php echo $title;?>">
        <div class="top-products__about-product">
          <h4 class="top-products__product-title top-products__product-title_black_small"><?php echo $title;?></h4>
          <p class="top-products__product-price top-products__product-price_black_small"><?php echo $product->get_price_html();?></p>
        </div>
      </div>
    </a>
    <?php $product_id = 559;
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
    <?php $product_id = 761;
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
<a href="<?php echo SITE_URL?>water-analysis">
  <section class="two-blocks water">
    <div class="two-blocks__intro">
      <div class="two-blocks__description two-blocks__description_water">
        <h3 class="two-blocks__title">Лабораторный анализ воды</h3>
        <p class="two-blocks__text">
          Подробный химико-биологический состав воды с помощью которого можно получить
          точный подбор фильтрующего оборудования для загородного дома или квартиры.
        </p>
      </div>
    </div>
    <img class="two-blocks__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/water.jpg" alt="Анализ воды по все параметрам">
  </section>
</a>
<a href="<?php echo SITE_URL?>equipment-selection">
  <section class="two-blocks equipment">
    <img class="two-blocks__pic" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/equipment.jpg" alt="Подбор оборудования для очистки воды">
    <div class="two-blocks__intro">
      <div class="two-blocks__description two-blocks__description_equipment">
        <h3 class="two-blocks__title">Онлайн подбор оборудования</h3>
        <p class="two-blocks__text">
          Бесплатно рассчитайте стоимость системы очистки воды в онлайн калькуляторе
          или с помощью наших специалистов.
        </p>
      </div>
    </div>
  </section>
</a>
<section class="two-blocks advantage">
  <img class="two-blocks__pic two-blocks__pic_advantage" src="<?php echo SITE_URL?>wp-content/uploads/2020/05/foot.png" alt="Преимущество нашего оборудования">
  <div class="two-blocks__intro">
    <div class="two-blocks__description two-blocks__description_advantage">
      <h3 class="two-blocks__title">Тишина и порядок</h3>
      <p class="two-blocks__text two-blocks__text_advantage">
        Управляющий клапан бесшумный и полностью автоматический. Аварийный клапан
        исключает возможность перелива. WaterBoss предоставляет тотальный контроль над водной стихией.
      </p>
    </div>
  </div>
</section>
</main>
<?php

get_footer();

?>