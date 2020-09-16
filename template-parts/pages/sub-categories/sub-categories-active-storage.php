<?php
  get_template_part('inc/get_min_price_product');
?>

<main class="mobil-version">
    <section class="sub-categories">
    <h1 class="sub-categories__title">Расходники</h1>
    <a href="<?php echo SITE_URL?>магистральные-расходники" class="sub-categories__card">
      <?php $product = get_min_price_product('магистральные-расходники');?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Расходники для магистральных систем</h3>
        <p class="sub-categories__text">Для разных условий очистки</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </a>
    <a href="<?php echo SITE_URL?>модули-для-питьевых" class="sub-categories__card">
      <?php $product = get_min_price_product('модули-для-питьевых'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Модули для питьевых фильтров</h3>
        <p class="sub-categories__text">Для разных условий очистки</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </a>
    <a href="<?php echo SITE_URL?>соль-для-waterboss" class="sub-categories__card">
      <?php $product = get_min_price_product('соль-для-waterboss'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Соль</h3>
        <p class="sub-categories__text">Фирменная соль - то, что надо!</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </a>
  </section>
</main>
