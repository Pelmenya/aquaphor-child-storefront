<?php
  get_template_part('inc/get_products');
  global $product;
  $product_id = $product->id;
  $product_img =  wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );
  $product_title = $product->get_title();
  $product_price = $product->get_price_html();
  $product_description = $product->get_description();
  $product_attributes_keys = array_keys($product->attributes);

  $category = get_the_terms( $product_id , 'product_cat' );
  $related_products = get_products($category[0]->slug, 'no-view');

  for($j = 0; $j < count($product_attributes_keys); ++$j) {
    //$product_attributes[$j] = wc_get_product_terms( $product_id , $product_attributes_keys[$j]);
    $product_attributes[$j]["title"] =  wc_attribute_label($product_attributes_keys[$j]);
    $product_attributes[$j]["value"] =  $product->get_attribute($product_attributes_keys[$j]);
  };
  ?>
  <main class="main-product-smart-phone">
    <div class="product-smart-phone">
      <div class="product-smart-phone__wrapper">
        <div class="product-smart-phone__pic-wrapper">
          <img class="product-smart-phone__pic" src="<?php echo $product_img ?>" alt="<?php echo $product_title ?>">
        </div>
        <h1 class="product-smart-phone__title"><?php echo $product_title ?></h1>
        <p class="product-smart-phone__price"><?php echo $product_price ?></p>
        <button class="product-smart-phone__button-description">
        <svg class="footer-smart__icon" width="24" height="24" viewBox="0 0 24 24">
          <path  d="M12 9c-1.1 0-2 .9-2 2v7c0 1.1.9 2 2 2s2-.9 2-2v-7c0-1.1-.9-2-2-2zm0 1c.563 0 1 .437 1 1v7c0 .563-.437 1-1 1s-1-.437-1-1v-7c0-.563.437-1 1-1zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-5C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm0 1c6.08 0 11 4.92 11 11s-4.92 11-11 11S1 18.08 1 12 5.92 1 12 1z"/>
        </svg>
        <span class="product-smart-phone__button-text">Описание и характеристики</span>
        <svg class="product-smart-phone__button-icon" width="6" height="12" viewBox="0 0 6 12">
          <g>
              <g fill="#28293C" fill-rule="nonzero">
                <path d="M9 10.19L5.03 6.22c-.293-.293-.767-.293-1.06 0-.293.293-.293.767 0 1.06l4.5 4.5c.293.293.767.293 1.06 0l4.5-4.5c.293-.293.293-.767 0-1.06-.293-.293-.767-.293-1.06 0L9 10.19z" transform="translate(-308 -401) translate(20 380) rotate(-90 159 -123)"/>
              </g>
          </g>
        </svg>
        </button>
      </div>
      <div class="product-smart-phone__wrapper product-smart-phone__wrapper_row">
        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
        <!--button class="product-smart-phone__button-add-to-card">Добавить в корзину</button-->
        <button class="product-smart-phone__button-one-click">Купить сейчас</button>
      </div>
    </div>
    <div class="slider-product-smart-phone">
      <h2 class="slider-product-smart-phone__title">ПОХОЖИЕ ТОВАРЫ</h2>
      <div class="swiper-container slider-product-smart-phone__container">
        <div class="swiper-pagination slider-product-smart-phone__pagination"></div>
        <div class="swiper-wrapper slider-product-smart-phone__wrapper">
          <?php
             for ($i = 0; $i < count($related_products); ++$i) {
              if ( $related_products[$i]->id != $product_id ) {
                $img_url = wp_get_attachment_url( get_post_thumbnail_id($related_products[$i]->id), 'thumbnail' );
                $img_alt = $related_products[$i]->get_title();
                $product_page_link = get_page_link($related_products[$i]->id)
          ?>
          <a href="<?php echo $product_page_link ?>" class="swiper-slide  slider-product-smart-phone__slide">
            <img class="slider-product-smart-phone__pic" src="<?php echo $img_url ?>" alt="<?php echo $img_alt ?>">
          </a>
          <?php
              }
            }
          ?>
        </div>
      </div>
    </div>
    <div class= "product-smart-phone-description is-close">
      <div class="product-smart-phone-description__text"><?php echo $product_description ?>
      </div>
      <?php
      for($j = 0; $j < count($product_attributes_keys); ++$j) {
        //$product_attributes[$j] = wc_get_product_terms( $product_id , $product_attributes_keys[$j]);
        ?>
        <div class="product-smart-phone-description__attributes">
          <div class="product-smart-phone-description__attribute">
            <?php echo $product_attributes[$j]["title"] ?>
          </div>
          <div class="product-smart-phone-description__attribute-value">
            <?php echo str_replace(",", " до ", $product_attributes[$j]["value"])?>
          </div>
        </div>
        <?php
      }; ?>

  </div>
  </main>


<?php
// echo "<pre>"; print_r(   $product_attributes ); echo "</pre>";
//echo "<pre>"; print_r($products); echo "</pre>";
