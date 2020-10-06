<?php
  get_template_part('inc/get_min_price_product');
?>

<section class="categories-slider">
  <h1 class="categories-slider__title" >Системы водоочистки, расходные материалы</h1>

  <div class="swiper-container categories-slider__container">
    <div class="swiper-pagination categories-slider__pagination"></div>
    <div class="swiper-wrapper">
    <?php
        $categories_products = get_terms("product_cat", [
          "orderby" => "name", // Тип сортировки
          "order" => "ASC", // Направление сортировки
          "hide_empty" => 1, // Скрывать пустые. 1 - да, 0 - нет.
          'parent'=> false, // Получаем главные категории без родителей - true все категории
        ]);
        if(count($categories_products) > 0) {
        foreach($categories_products as $categories_item) {
          ?>
          <a href="<?php echo SITE_URL?>sub-categories?category=<?php echo $categories_item->term_id;?>&title=<?php echo $categories_item->name;?>" class="swiper-slide categories-slider__slide">
            <?php $product = get_min_price_product($categories_item->slug);?>
            <img class="categories-slider__pic" src="<?php echo wp_get_attachment_url(get_woocommerce_term_meta( $categories_item->term_id, 'thumbnail_id', true ));?>" alt="<?php echo $categories_item->name;?>">
            <div class="categories-slider__slide-wrapper">
              <h4 class="categories-slider__sub-title"><?php echo $categories_item->name; ?></h4>
              <p class="categories-slider__text"><?php echo $categories_item->description; ?></p>
              <p class="categories-slider__price">от <?php echo $product["price"]?> руб.</p>
            </div>
          </a>
        <?php
        }
      } ?>
    </div>
  </div>
</section>