<?php
  get_template_part('inc/get_products');
  get_template_part('inc/get_product_images_urls');

  global $product;
  $product_id = $product->id;
  $product_images_urls =  get_product_images_urls($product);
  $product_title = $product->get_title();
  $product_price = $product->get_price();
  $product_description = $product->get_description();
  $product_short_description = $product->get_short_description();
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
      <div class="product-smart-phone__pic-wrapper">
        <div class="swiper-container product-pictures">
          <div class="swiper-wrapper product-pictures__wrapper">
            <?php
              for ($i = 0; $i < count($product_images_urls); ++$i) { ?>
                <div class="swiper-slide product-pictures__slide">
                  <div class="product-pictures__pic-wrapper">
                    <img class="product-pictures__pic" src="<?php echo $product_images_urls[$i]; ?>" alt="<?php echo $product_title ?>">
                  </div>
                </div>
                <?php
              }
            ?>
          </div>
          <div class="swiper-pagination product-pictures__pagination"></div>
        </div>
        <div class="product-smart-phone__decor"></div>
      </div>
      <div class="product-smart-phone__wrapper">
        <div class="product-smart-phone__wrapper product-smart-phone__wrapper_row">
          <h1 class="product-smart-phone__title"><?php echo $product_title ?></h1>
          <button class="product-smart-phone__button-description">
            <svg  width="22" height="22" viewBox="0 0 22 22">
              <defs>
                  <path id="rule" d="M11 0c6.075 0 11 4.925 11 11s-4.925 11-11 11S0 17.075 0 11 4.925 0 11 0zm0 1.76c-5.103 0-9.24 4.137-9.24 9.24 0 5.103 4.137 9.24 9.24 9.24 5.103 0 9.24-4.137 9.24-9.24 0-5.103-4.137-9.24-9.24-9.24zM11 9c.552 0 1 .448 1 1v5c0 .552-.448 1-1 1s-1-.448-1-1v-5c0-.552.448-1 1-1zm0-3c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z"/>
              </defs>
              <g fill="none" fill-rule="evenodd">
                  <g>
                      <g>
                          <g>
                              <g transform="translate(-314 -298) translate(314 298)">
                                  <use fill="var(--blue-blue)" fill-rule="nonzero" xlink:href="#rule"/>
                              </g>
                          </g>
                      </g>
                  </g>
              </g>
            </svg>
          </button>
        </div>
        <p class="product-smart-phone__short-description"><?php echo $product_short_description;?></p>

           <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

            <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
              <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

              <?php
              do_action( 'woocommerce_before_add_to_cart_quantity' );
              ?>
              <div class="product-smart-phone__wrapper-counter">
                <p class="product-smart-phone__price
                <?php if ($product->get_sale_price() != ""){
                      echo "product-smart-phone__price_sale";
                }?>"><?php if ($product->get_sale_price() != ""){
                  echo $product->get_sale_price() . " руб.";
                  } else echo $product_price . " руб.";?>
                  </p>
                <div class="product-smart-phone__wrapper-counter">
                  <button type="button" class="product-smart-phone__button-counter minus">-</button>
                  <?php
                    woocommerce_quantity_input(
                      array(
                        'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                        'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                        'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                      )
                    );
                    do_action( 'woocommerce_after_add_to_cart_quantity' );
                  ?>
                  <button type="button" class="product-smart-phone__button-counter plus"><span>+</span></button>
                </div>
              </div>
              <div class="product-smart-phone__wrapper-counter product-smart-phone__wrapper-counter_shipping">
                <svg width="12" height="9" viewBox="0 0 12 9">
                  <defs>
                      <path id="0h6s9amusa" d="M11.4 0l.022.008H12V7.2c0 .663-.537 1.2-1.2 1.2H1.2C.537 8.4 0 7.863 0 7.2V.1C.12.09.325.083.597.075L.6 0h10.8zm-.6 1.2H8.399L8.4 4.8c0 .331-.269.6-.6.6H4.2c-.331 0-.6-.269-.6-.6l-.001-3.6H1.2v6h9.6v-6zm-3.601 0h-2.4l.001 3h2.4l-.001-3z"/>
                  </defs>
                  <g fill="none" fill-rule="evenodd">
                      <g>
                          <g>
                              <g transform="translate(-24 -435) translate(24 290) translate(0 145.6)">
                                  <use fill="#1054DB" fill-rule="nonzero" xlink:href="#0h6s9amusa"/>
                              </g>
                          </g>
                      </g>
                  </g>
                </svg>
                <p class="product-smart-phone__shipping">Бесплатная доставка курьером или в магазин</p>
              </div>
              <div class="product-smart-phone__wrapper-counter product-smart-phone__wrapper-counter_shipping">
                <svg width="12" height="9" viewBox="0 0 12 9">
                  <defs>
                      <path id="cznwj9z8ma" d="M10.91 164c.602 0 1.09.488 1.09 1.09v6.546c0 .603-.488 1.091-1.09 1.091H1.09c-.602 0-1.09-.488-1.09-1.09v-6.546C0 164.488.488 164 1.09 164h9.82zm0 1.09H1.09v6.546h9.82v-6.545zM6 168.91c.301 0 .545-.245.545-.546 0-.302-.244-.546-.545-.546-.301 0-.545.244-.545.546 0 .3.244.545.545.545zM3.273 170c.301 0 .545.244.545.545 0 .302-.244.546-.545.546H2.182c-.301 0-.546-.244-.546-.546 0-.3.245-.545.546-.545h1.09zM6 166.727c.904 0 1.636.733 1.636 1.637 0 .903-.732 1.636-1.636 1.636-.904 0-1.636-.733-1.636-1.636 0-.904.732-1.637 1.636-1.637zm3.818-1.09c.301 0 .546.244.546.545 0 .301-.245.545-.546.545h-1.09c-.302 0-.546-.244-.546-.545 0-.301.244-.546.545-.546h1.091z"/>
                  </defs>
                  <g fill="none" fill-rule="evenodd">
                      <g>
                          <g transform="translate(-24 -454) translate(24 290)">
                              <use fill="#1054DB" fill-rule="nonzero" xlink:href="#cznwj9z8ma"/>
                          </g>
                      </g>
                  </g>
                </svg>
                <p class="product-smart-phone__shipping">Оплата наличными или картой при получении</p>
              </div>
              <div class="product-smart-phone__wrapper product-smart-phone__wrapper_row">
                <button class="product-smart-phone__button-one-click"><span>Купить сейчас</span></button>
                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt product-smart-phone__button-add-to-card"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
              </div>
              <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
            </form>

            <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
      </div>
        <!--?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?-->
        <!--button class="product-smart-phone__button-add-to-card">Добавить в корзину</button-->
    </div>
    <div class="slider-product-smart-phone">
      <h2 class="slider-product-smart-phone__title">Сопутствующие товары</h2>
      <div class="swiper-container slider-product-smart-phone__container">
        <div class="swiper-pagination slider-product-smart-phone__pagination"></div>
        <div class="swiper-wrapper slider-product-smart-phone__wrapper">
          <?php
             for ($i = 0; $i < count($related_products); ++$i) {
              if ( $related_products[$i]->id != $product_id ) {
                $img_url = wp_get_attachment_url( get_post_thumbnail_id($related_products[$i]->id), 'thumbnail' );
                $img_alt = $related_products[$i]->get_title();
                $product_page_link = get_page_link($related_products[$i]->id);
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
 // echo $product->get_image_id();
  //echo wp_get_attachment_url( $product->get_image_id() );
 // echo wc_get_stock_html( $product );
//  echo "<pre>"; print_r(get_product_images_urls($product)); echo "</pre>";
 // echo "<pre>"; print_r($product); echo "</pre>";
?>
