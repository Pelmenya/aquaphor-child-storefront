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
  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  global $product;
  ?>
    <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
    <a class="products-smart-phone__card" href="<?php echo get_page_link($product->ID)?>">
      <img class="products-smart-phone__card-pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product->ID), 'thumbnail' );?>" alt="<?php echo $title;?>">
      <h4 class="products-smart-phone__card-title"><?php the_title(); ?></h4>
      <p class="products-smart-phone__card-price"><?php echo $product->get_price_html();?></p>
    </a>
    <?php endwhile; ?>
    <?php wp_reset_query();
  }?>
