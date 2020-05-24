<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header();
?>
<main class="main">
  <h1 class="title title_about-company">Подбор оборудования</h1>
  <p class="description">
    <span class="description__insert">
      Текст-«рыба» — это заготовленный, скопированный или собственноручно написанный текст
      для экономии времени, который вставляется в макет страницы для демонстрации его условного
      внешнего наполнения в процессе разработки или для тестирования шрифта.
    </span>
  </p>
  <section class="equipment-selection">
    <h3 class="sub-title">Калькулятор системы водоподготовки</h3>
    <form class="equipment-selection__form" name="equipmentSelection">
      <div class="equipment-selection__choice">
        <div class="equipment-selection__choice-col">
          <h4 class="description">Какая сейчас вода?</h4>
          <div class="equipment-selection__choice-item">
            <input class="equipment-selection__choice-radio" type="radio" name="choiceColor">
            <label class="equipment-selection__choice-color" for="choiceColor">Прозрачная</label>
          </div>
          <div class="equipment-selection__choice-item">
            <input  class="equipment-selection__choice-radio" type="radio" name="choiceColor">
            <label class="equipment-selection__choice-color" for="choiceColor">Мутная</label>
          </div>
        </div>
        <div class="equipment-selection__choice-col">
          <h4 class="description">Какая нужна вода?</h4>
          <div class="equipment-selection__choice-item">
            <input class="equipment-selection__choice-radio" type="radio" name="choiceTaste">
            <label class="equipment-selection__choice-color" for="choiceTaste">Питьевая</label>
          </div>
          <div class="equipment-selection__choice-item">
            <input  class="equipment-selection__choice-radio" type="radio" name="choiceTaste">
            <label class="equipment-selection__choice-color" for="choiceTaste">Техническая</label>
          </div>
        </div>
        <div class="equipment-selection__choice-col">
          <h4 class="description">Точки водоразбора?</h4>
          <input  class="equipment-selection__point-water" type="range" value="1" min="1" max="6" step="1" name="choiceRange">
          <label class="equipment-selection__choice-color" for="choiceRange">От 1 до 6 точек</label>
        </div>
      </div>
      <table class="equipment-selection__table">
        <thead>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="hydrogen">Водород</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="hydrogen">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="oxidability">Окисляемость</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="oxidability">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="mineralization">Минерализация</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="mineralization">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="manganese">Марганец</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="manganese">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="inflexibility">Жесткость</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="inflexibility">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="fluorides">Фториды</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="fluorides">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="ferrum">Железо</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="ferrum">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="hydrogenSulphide">Сероводород</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="hydrogenSulphide">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="nitrates">Нитраты</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="nitrates">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="sulfides">Сульфиды</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="sulfides">
            </td>
          </tr>
        </thead>
      </table>
    <div class="equipment-selection__info">
      <div class="equipment-selection__info-pointer"></div>
      <p class="equipment-selection__description">
          Введите данные полученные с помощью нашего <a href="<?php echo SITE_URL?>water-analysis" class="equipment-selection__link">анализа воды</a> или из другой лаборатории.
      </p>
    </div>
    <button class="equipment-selection__calculate-button">Рассчитать</button>
   </form>
  </section>
</main>
<!-- Инициализация данных товаров для калькулятора по id -->

<script>
  <?php
  // массив ids оборудования для расчета
  $systems_ids = array( 529, 530, 531 , 532, 727, 534, 536, 537, 535);
    for($i = 0; $i < count($systems_ids); ++$i) {
      // товар(product) ячейка [0]
      $systems[$i][0] = wc_get_product($systems_ids[$i]);
      // получаем ключи всех атрибутов, что затем получить их таксономию(значения)
        $attributes_keys = array_keys($systems[$i][0]->attributes);
        for($j = 0; $j < count($attributes_keys); ++$j) {
          $systems[$i][1][$j] = wc_get_product_terms( $systems_ids[$i] , $attributes_keys[$j]);
          // ячейка 2 - название атрибута, 3-4 - мин/макс значения атрибута
          $systems[$i][1][$j][] = $attributes_keys[$j];
          // ячейка
          $systems[$i][1][$j][]=$systems[$i][1][$j][0]->name;
          $systems[$i][1][$j][]=$systems[$i][1][$j][1]->name;
        };
      //  изображение товара ячейка [][3]
      $systems[$i][2] = wp_get_attachment_url( get_post_thumbnail_id($systems_ids[$i]), 'thumbnail' );
    }



 ?>

 const systems = []
 // собираем массив объектов товаров, их атрибутов и изображений

 waterBoss400.product = <?php echo $systems[0][0];?>;
 waterBoss400.attribute = <?php echo json_encode($systems[0][1]);?>;
 waterBoss400.pic = <?php echo json_encode($systems[0][2]);?>;


</script>

<?php
get_footer();
?>
