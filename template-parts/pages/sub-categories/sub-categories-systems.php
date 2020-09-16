<?php
  get_template_part('inc/get_min_price_product');
?>

<main class="mobil-version">
    <section class="sub-categories">
    <h1 class="sub-categories__title">Комплексные системы водоочистки</h1>
    <div class="sub-categories__card">
      <?php $product = get_min_price_product('waterboss');?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">WaterBoss</h3>
        <p class="sub-categories__text">Очистка жёсткой воды с повышенным содержанием железа.</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </div>
    <div class="sub-categories__card">
      <?php $product = get_min_price_product('watermax'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">WaterMax</h3>
        <p class="sub-categories__text">Очистка, умягчение и обезжелезивание воды.</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </div>
    <div class="sub-categories__card">
      <?php $product = get_min_price_product('aquaphor-pro'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Aquaphor Pro</h3>
        <p class="sub-categories__text">Умягчение воды, удаление железа и марганца высокой концентрации.</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </div>
  </section>
</main>
