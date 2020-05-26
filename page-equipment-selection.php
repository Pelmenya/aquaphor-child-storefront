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
            <input class="equipment-selection__choice-radio" value="1" type="radio" name="pa_clear_turbidity">
            <label class="equipment-selection__choice-color" for="pa_clear_turbidity">Прозрачная</label>
          </div>
          <div class="equipment-selection__choice-item">
            <input  class="equipment-selection__choice-radio" value="2" type="radio" name="pa_clear_turbidity">
            <label class="equipment-selection__choice-color" for="pa_clear_turbidity">Мутная</label>
          </div>
        </div>
        <div class="equipment-selection__choice-col">
          <h4 class="description">Какая нужна вода?</h4>
          <div class="equipment-selection__choice-item">
            <input class="equipment-selection__choice-radio" value="1" type="radio" name="choiceTaste">
            <label class="equipment-selection__choice-color" for="choiceTaste">Питьевая</label>
          </div>
          <div class="equipment-selection__choice-item">
            <input  class="equipment-selection__choice-radio" value="2" type="radio" name="choiceTaste">
            <label class="equipment-selection__choice-color" for="choiceTaste">Техническая</label>
          </div>
        </div>
        <div class="equipment-selection__choice-col">
          <h4 class="description">Точки водоразбора?</h4>
          <input  class="equipment-selection__point-water" type="range" value="1" min="1" max="6" step="1" name="pa_water_points">
          <label class="equipment-selection__choice-color equipment-selection__choice-color_water-points" for="pa_water_points">От 1 до 6 точек</label>
        </div>
      </div>
      <table class="equipment-selection__table">
        <thead>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_ph">Реакция среды pH</label>
              <input class="equipment-selection__elem-value" value="6.9" placeholder="Введите значение..." type="text" name="pa_ph">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_oxidability">Окисляемость</label>
              <input class="equipment-selection__elem-value" value="2" placeholder="Введите значение..." type="text" name="pa_oxidability">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_tds">Минерализация</label>
              <input class="equipment-selection__elem-value" value="302" placeholder="Введите значение..." type="text" name="pa_tds">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_mn">Марганец</label>
              <input class="equipment-selection__elem-value" value="0.03" placeholder="Введите значение..." type="text" name="pa_mn">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_tdh">Жесткость</label>
              <input class="equipment-selection__elem-value" value="7.5" placeholder="Введите значение..." type="text" name="pa_tdh">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_ftor">Фториды</label>
              <input class="equipment-selection__elem-value" value="0.52" placeholder="Введите значение..." type="text" name="pa_ftor">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_ferrum">Железо</label>
              <input class="equipment-selection__elem-value" value="0.03" placeholder="Введите значение..." type="text" name="pa_ferrum">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_h2s">Сероводород</label>
              <input class="equipment-selection__elem-value" value="0.004" placeholder="Введите значение..." type="text" name="pa_h2s">
            </td>
          </tr>
          <tr class="equipment-selection__choice-item">
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_nitrate">Нитраты</label>
              <input class="equipment-selection__elem-value" value="1.5" placeholder="Введите значение..." type="text" name="pa_nitrate">
            </td>
            <td class="equipment-selection__td">
              <label class="equipment-selection__elem" for="pa_sulphide">Сульфиды</label>
              <input class="equipment-selection__elem-value" value="0.008" placeholder="Введите значение..." type="text" name="pa_sulphide">
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
      <button class="equipment-selection__calculate-button" disabled>Рассчитать</button>
    </form>
  </section>
  <section class="results">
  <div class="results__container">
    <div class="card">
      <img src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="card__pic">
      <h4 class=card__title>Аквафор&nbsp;Осмо&nbsp;-&nbsp;Кристалл&nbsp;50&nbsp;исп.&nbsp;4М asdasdasdasda sdaf</h4>
      <p class="card__price">5550000 руб.</p>
    </div>
    <div class="card">
      <img src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="card__pic">
      <h4 class=card__title>Аквафор&nbsp;Осмо&nbsp;-&nbsp;Кристалл&nbsp;50&nbsp;исп.&nbsp;4М asdasdasdasda sdaf</h4>
      <p class="card__price">5550000 руб.</p>
    </div>
    <div class="card">
      <img src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="card__pic">
      <h4 class=card__title>Аквафор&nbsp;Осмо&nbsp;-&nbsp;Кристалл&nbsp;50&nbsp;исп.&nbsp;4М asdasdasdasda sdaf</h4>
      <p class="card__price">5550000 руб.</p>
    </div>
    <div class="card">
      <img src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="card__pic">
      <h4 class=card__title>Аквафор&nbsp;Осмо&nbsp;-&nbsp;Кристалл&nbsp;50&nbsp;исп.&nbsp;4М asdasdasdasda sdaf</h4>
      <p class="card__price">5550000 руб.</p>
    </div>
    <div class="card">
      <img src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="card__pic">
      <h4 class=card__title>Аквафор&nbsp;Осмо&nbsp;-&nbsp;Кристалл&nbsp;50&nbsp;исп.&nbsp;4М asdasdasdasda sdaf</h4>
      <p class="card__price">5550000 руб.</p>
    </div>
    <div class="card">
      <img src="<?php echo SITE_URL?>wp-content/uploads/2020/03/ru_front_racurs_image_ffffff-33349.png" class="card__pic">
      <h4 class=card__title>Аквафор&nbsp;Осмо&nbsp;-&nbsp;Кристалл&nbsp;50&nbsp;исп.&nbsp;4М asdasdasdasda sdaf</h4>
      <p class="card__price">5550000 руб.</p>
    </div>
    <div class="card"></div>
    <div class="card"></div>
  </div>
  <button class="equipment-selection__calculate-button equipment-selection__calculate-button_add-to-cart">Добавить все в корзину</button>
</section>
</main>
<script>
// Инициализация глобальных переменных для JS
  window.obj = {};
  window.systems = [];
  window.filterCases = [];
  window.filters = [];
</script>
<?php
    // корпус пре(пост)фильтра ids
    $filter_cases_ids = array( 543 );
    $filter_cases_ids_count = count($filter_cases_ids);
    // массив фильтров ids
    $filters_ids = array( 884, 880 );
    $filters_ids_count = count($filters_ids);
    // массив ids оборудования для расчета
    $systems_ids = array( 529, 530, 531 , 532, 727, 534, 536, 537, 535);
    $systems_ids_count = count($systems_ids);
    // получаем все объекты фильтров и их изображения
    for($i = 0; $i < $filter_cases_ids_count; ++$i) {
      $filter_cases[$i][0] = wc_get_product($filter_cases_ids[$i]);
      $filter_cases[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($filter_cases_ids[$i]), 'thumbnail' );
      ?>
        <script>
          // Собираем данные для JS
          window.obj = {};
          window.obj.product = <?php echo $filter_cases[$i][0];?>;
          window.obj.urlPic = <?php echo json_encode($filter_cases[$i][1]);?>;
          window.filterCases.push(window.obj);
      </script>
      <?php
    };
    // получаем все объекты корпусов фильтров и их изображения
    for($i = 0; $i < $filters_ids_count; ++$i) {
      $filters[$i][0] = wc_get_product($filters_ids[$i]);
      $filters[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($filters_ids[$i]), 'thumbnail' );
      ?>
        <script>
          // Собираем данные для JS
          window.obj = {};
          window.obj.product = <?php echo $filters[$i][0];?>;
          window.obj.urlPic = <?php echo json_encode($filters[$i][1]);?>;
          window.filters.push(window.obj);
        </script>
      <?php
    };
    for($i = 0; $i < $systems_ids_count; ++$i) {
      // товар(product) ячейка [0]
      $systems[$i][0] = wc_get_product($systems_ids[$i]);
      // получаем ключи всех атрибутов, что затем получить их таксономию(значения)
        $attributes_keys = array_keys($systems[$i][0]->attributes);
        for($j = 0; $j < count($attributes_keys); ++$j) {
          $systems[$i][1][$j] = wc_get_product_terms( $systems_ids[$i] , $attributes_keys[$j]);
          // ячейка 2 - название атрибута, 3-4 - мин/макс значения атрибута
          $systems[$i][1][$j][] = $attributes_keys[$j];
          // ячейка 3-4 - мин/макс значения атрибута
          $systems[$i][1][$j][]=$systems[$i][1][$j][0]->name;
          $systems[$i][1][$j][]=$systems[$i][1][$j][1]->name;
        };
      //  изображение товара ячейка [][2]
      $systems[$i][2] = wp_get_attachment_url( get_post_thumbnail_id($systems_ids[$i]), 'thumbnail' );
      ?>
      <script>
        // Собираем данные для JS
        window.obj = {};
        window.obj.product = <?php echo $systems[$i][0];?>;
        window.obj.attributes = <?php echo json_encode($systems[$i][1]);?>;
        window.obj.urlPic = <?php echo json_encode($systems[$i][2]);?>;
        window.systems.push(window.obj);
      </script>
      <?php
    }
    //echo "<pre>"; print_r($systems[0][0]); echo "</pre>";
 ?>
<?php
get_footer();
?>
