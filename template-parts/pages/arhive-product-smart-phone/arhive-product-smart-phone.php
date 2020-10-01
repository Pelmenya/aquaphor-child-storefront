<?php get_template_part('inc/get_page_slug');


?>

 <main class="mobil-version">
  <section class="products-smart-phone">
    <div class="products-smart-phone__wrapper">
      <h1 class="products-smart-phone__title"><?php if (get_search_query() != ""){
        echo "Поиск по:  " . get_search_query();
      } else echo "Скидки"; ?></h1>
    </div>
    <div class="products-smart-phone__container">
      <?php
       if (have_posts()) : while (have_posts()) : the_post();
        global $product;
      ?>
        <a class="products-smart-phone__card" href="<?php echo get_page_link($product->id)?>">
          <img class="products-smart-phone__card-pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($products->id), 'thumbnail' );?>" alt="<?php echo $product->get_title();?>">
          <h4 class="products-smart-phone__card-title"><?php echo $product->get_title(); ?></h4>
          <p class="products-smart-phone__card-price
            <?php if ($product->get_sale_price() != ""){
                echo "products-smart-phone__card-price_sale";
              }?>">
          <?php echo $product->get_price(); ?> руб.
          </p>
        </a>
      <?php endwhile; else: ?>
      <p class="products-smart-phone__card-title">Поиск не дал результатов.</p>
      <?php endif;?>
    </div>
  </section>
</main>
