<?php
/**
 *  Функция отрисовывает товары в зависимости от slug страницы кaтегории товара в контейнер
 *  или получает данные по продуктам категории
 */
function get_products( $category_slug, $context = 'view' ) {
    $args = array(
      'tax_query' => array(
      'relation' => 'AND',
      array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => $category_slug,
      ),
    ),
    'posts_per_page' => 400,
    'post_type' => 'product',
    'orderby' => 'price', // сортировка
  );

  $loop = new WP_Query( $args );
  $products = array();
  while ( $loop->have_posts() ) : $loop->the_post();
    $product = wc_get_product(get_the_ID());
    array_push( $products, $product);
  endwhile;
  wp_reset_query();
    usort( $products, 'wc_products_array_orderby_price');
  if ($context == 'view') {
    for($i = 0; $i < count($products); ++$i) { ?>
      <div class="products-smart-phone__card">
        <a href="<?php echo get_page_link($products[$i]->id)?>">
          <img class="products-smart-phone__card-pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($products[$i]->id), 'thumbnail' );?>" alt="<?php echo $products[$i]->get_title();?>">
        </a>
        <h4 class="products-smart-phone__card-title"><?php echo $products[$i]->get_title(); ?></h4>
        <p class="products-smart-phone__card-price">
          <?php
            if ($products[$i]->get_sale_price() == "") {
                echo "<ins>" . $products[$i]->get_price() . " руб." . "</ins>";
            } else
              echo "<del class='products-smart-phone__regular-price'>" . $products[$i]->get_regular_price() . "</del>" . "<ins class='products-smart-phone__sale-price'>" . " " . $products[$i]->get_sale_price() . " руб." . "</ins>";
          ?>
        </p>
        <a class="button product_type_simple add_to_cart_button ajax_add_to_cart products-smart-phone__add-button
        <?php if ($products[$i]->get_sale_price() != ""){
              echo "products-smart-phone__add-button_orange";
         }?>"
          href='?add-to-cart=<?php echo $products[$i]->id?>' data-quantity="1" data-product_id="<?php echo $products[$i]->id?>" data-product_sku="" aria-label='Добавить корзину' rel="nofollow">
          <div class="products-smart-phone__wrapper-btn-add">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
              <g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                  <g stroke="#FFF" stroke-width="1.5">
                      <g>
                          <g>
                              <g>
                                  <g>
                                      <g>
                                          <path d="M3.667 0v7.326M7.333 3.663H0" transform="translate(-154 -327) translate(24 320) translate(123) translate(8 8)"/>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </g>
                  </g>
              </g>
            </svg>
          </div>
        </a>
      </div>
    <?php
      };
    };
  return $products;
};
?>

