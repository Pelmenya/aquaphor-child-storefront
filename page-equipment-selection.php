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
            <input class="equipment-selection__choice-color" type="radio" name="choiceColor">
            <label class="equipment-selection__choice-color" for="choiceColor">Прозрачная</label>
          </div>
          <div class="equipment-selection__choice-item">
            <input  class="equipment-selection__choice-color" type="radio" name="choiceColor">
            <label class="equipment-selection__choice-color" for="choiceColor">Мутная</label>
          </div>
        </div>
        <div class="equipment-selection__choice-col">
          <h4 class="description">Какая нужна вода?</h4>
          <div class="equipment-selection__choice-item">
            <input class="equipment-selection__choice-color" type="radio" name="choiceTaste">
            <label class="equipment-selection__choice-color" for="choiceTaste">Питьевая</label>
          </div>
          <div class="equipment-selection__choice-item">
            <input  class="equipment-selection__choice-color" type="radio" name="choiceTaste">
            <label class="equipment-selection__choice-color" for="choiceTaste">Техническая</label>
          </div>
        </div>
        <div class="equipment-selection__choice-col">
          <h4 class="description">Точки водоразбора?</h4>
          <input  class="equipment-selection__choice-color" type="range" value="1" min="1" max="6" step="1" name="choiceRange">
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
              <label class="equipment-selection__elem" for="organics">Органика</label>
              <input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="organics">
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
   </form>
  </section>
</main>

<?php
get_footer();

?>