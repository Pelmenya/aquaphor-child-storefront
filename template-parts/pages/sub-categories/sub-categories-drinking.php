<?php
  get_template_part('inc/get_min_price_product');
?>

<main class="mobil-version">
  <section class="sub-categories">
    <h1 class="sub-categories__title">Питьевые фильтры</h1>
    <div class="sub-categories__card обратный-осмос">
      <?php $product = get_min_price_product('обратный-осмос'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Обратный осмос</h3>
        <p class="sub-categories__text">
          Решит все вопросы бытовой водоочистки и полностью заменит бутилированную воду премиум-класса.
        </p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </div>
    <div class="sub-categories__card проточный">
      <?php $product = get_min_price_product('проточный'); ?>
      <img class="sub-categories__pic" src="<?php echo $product["img_url"]?>" alt="<?php echo $product["title"]?>">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title">Проточный</h3>
        <p class="sub-categories__text">Ультрафильтрация надежно защищает от бактерий без химических бактерицидов.</p>
        <p class="sub-categories__price">от <?php echo $product["price"]?> руб.</p>
      </div>
    </div>
  </section>
</main>

<script>
 console.log(document.querySelector('.sub-categories__card.обратный-осмос'))
</script>