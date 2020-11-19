<?php
  get_template_part('inc/get_min_price_product');
?>

<?php
  // общаемся между страницами
  $categories_products = get_terms("product_cat", [
    "orderby" => "name", // Тип сортировки
    "order" => "ASC", // Направление сортировки
    "hide_empty" => 1, // Скрывать пустые. 1 - да, 0 - нет.
    'parent'=> false, // Получаем главные категории без родителей - true все категории
  ]);
?>
  <main class="mobil-version">
  <section class="sub-categories">
  <h1 class="sub-categories__title">Каталог</h1>
  <?php
  if(count($categories_products) > 0) {
    foreach($categories_products as $categories_item) {
      ?>
     <a href="<?php echo SITE_URL?>sub-categories?category=<?php echo $categories_item->term_id;?>&title=<?php echo $categories_item->name;?>" class="sub-categories__card-link">
      <div class="sub-categories__card">
          <?php $product = get_min_price_product($categories_item->slug);?>
          <img class="sub-categories__pic" src="<?php echo wp_get_attachment_url(get_woocommerce_term_meta( $categories_item->term_id, 'thumbnail_id', true ));?>" alt="<?php echo $categories_item->name;?>">
          <div class="sub-categories__wrapper">
            <h3 class="sub-categories__sub-title"><?php echo $categories_item->name; ?></h3>
            <p class="sub-categories__text"><?php echo $categories_item->description; ?></p>
            <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
          </div>
        </div>
        <div class="sub-categories__card-decor"></div>
        <div class="sub-categories__card-decor sub-categories__card-decor_last"></div>
      </a>
    <?php
    }
  } ?>
  </section>
</main>
