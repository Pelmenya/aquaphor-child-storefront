<?php
/**
 *  Функция отрисовывает товары в зависимости от slug страницы ктегории товара в контейнер
 */
function get_products( $category_slug ) {
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
    array_push( $products,  wc_get_product(get_the_ID()));
  endwhile;
  wp_reset_query();
    usort( $products, 'wc_products_array_orderby_price');
    for($i = 0; $i < count($products); ++$i) { ?>
      <a class="products-smart-phone__card" href="<?php echo get_page_link($products[$i]->id)?>">
        <img class="products-smart-phone__card-pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($products[$i]->id), 'thumbnail' );?>" alt="<?php echo $products[$i]->get_title();?>">
        <h4 class="products-smart-phone__card-title"><?php echo $products[$i]->get_title(); ?></h4>
        <p class="products-smart-phone__card-price
          <?php if ($products[$i]->get_sale_price() != ""){
              echo "products-smart-phone__card-price_sale";
            }?>">
          <?php echo $products[$i]->get_price(); ?> руб.
        </p>
      </a>
    <?php
    }
  }?>

