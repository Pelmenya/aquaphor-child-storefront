<?php
  get_template_part('inc/get_min_price_product');
?>

<main class="mobil-version">
  <section class="sub-categories trunk">
    <h1 class="sub-categories__title">Магистральные</h1>
    <a href="<?php echo SITE_URL?>горячая" class="sub-categories__card">
      <?php $product = get_min_price_product('холодная'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Для холодной воды</h3>
        <p class="sub-categories__text">Механическая очистка при высоком давлении.</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </a>
    <a href="<?php echo SITE_URL?>холодная" class="sub-categories__card">
      <?php $product = get_min_price_product('горячая'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Для горячей воды</h3>
        <p class="sub-categories__text">Механическая очистка при высоких температурах.</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </a>
  </section>
</main>
