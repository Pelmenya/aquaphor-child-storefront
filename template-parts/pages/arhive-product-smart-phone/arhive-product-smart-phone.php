<?php get_template_part('inc/get_page_slug');


?>

 <main class="mobil-version">
  <section class="products-smart-phone">
    <div class="products-smart-phone__wrapper">
      <h1 class="products-smart-phone__title">
        <?php
        if (get_search_query() != "") echo "Поиск по:  " . get_search_query();
        else if ($_GET["slug"] == "discounts") echo "Скидки";
        else echo "";

      ?></h1>
    </div>
    <div class="products-smart-phone__container">
      <?php
       if (have_posts()) : while (have_posts()) : the_post();
        global $product;
      ?>
      <div class="products-smart-phone__card">
        <a href="<?php echo get_page_link($product->id)?>">
          <img class="products-smart-phone__card-pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($product->id), 'thumbnail' );?>" alt="<?php echo $product->get_title();?>">
        </a>
        <h4 class="products-smart-phone__card-title"><?php echo $product->get_title(); ?></h4>
        <p class="products-smart-phone__card-price">
          <?php
            if ($product->get_sale_price() == "") {
                echo "<ins>" . $product->get_price() . " руб." . "</ins>";
            } else
              echo "<del class='products-smart-phone__regular-price'>" . $product->get_regular_price() . "</del>" . "<ins class='products-smart-phone__sale-price'>" . " " . $product->get_sale_price() . " руб." . "</ins>";
          ?>
        </p>
        <a class="button product_type_simple add_to_cart_button ajax_add_to_cart products-smart-phone__add-button
        <?php if ($product->get_sale_price() != ""){
              echo "products-smart-phone__add-button_orange";
         }?>"
          href='?add-to-cart=<?php echo $product->id?>' data-quantity="1" data-product_id="<?php echo $product->id?>" data-product_sku="" aria-label='Добавить корзину' rel="nofollow">
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
      <?php endwhile; else: ?>
      <p class="products-smart-phone__card-title">Поиск не дал результатов.</p>
      <?php endif;?>
    </div>
  </section>
</main>
