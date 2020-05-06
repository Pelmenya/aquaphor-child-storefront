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
  <h1 class="title">Доставка</h1>
  <h3 class="sub-title">Доставка мастером - 400 руб.</h3>
  <p class="description">Пн - Сб, 10:00 - 18:00
    <span class="description__insert"> Время доставки до 2 дней.</span>
  </p>
  <h3 class="sub-title">Доставка курьером - 300 руб.</h3>
  <p class="description">Пн - Сб, 10:00 - 18:00
    <span class="description__insert"> Время доставки до 2 дней.</span>
  </p>
  <h3 class="sub-title">Самовывоз - бесплатно</h3>
  <p class="description">
    <span class="description__insert">Доставка до 1 дня. Забрать заказ возможно в течение 7 дней.</span>
  </p>
  <table class="delivery-adress">
    <thead>
      <tr>
        <th class="delivery-adress__th">Адрес</th>
        <th class="delivery-adress__th">Магазин</th>
        <th class="delivery-adress__th">График</th>
      </tr>
      <tr>
        <td class="delivery-adress__td">г.&nbsp;Ступино,&nbsp;ул.&nbsp;Проспект&nbsp;Победы,&nbsp;63А</td>
        <td class="delivery-adress__td"><span class="delivery-adress__td-insert">ТЦ&nbsp;&laquo;Курс&raquo;&nbsp;&bull;</span>&nbsp;8&nbsp;(499)&nbsp;577-03-79&nbsp;</td>
        <td class="delivery-adress__td">Пн&nbsp;-&nbsp;Вс,&nbsp;10&#58;00&nbsp;-&nbsp;20&#58;00</td>
      </tr>
      <tr>
        <td class="delivery-adress__td">г.&nbsp;Ступино,&nbsp;ул.&nbsp;Горького,&nbsp;26</td>
        <td class="delivery-adress__td"><span class="delivery-adress__td-insert">ТЦ&nbsp;&laquo;Ока&raquo;&nbsp;&bull;</span>&nbsp;8&nbsp;(499)&nbsp;577-03-79&nbsp;</td>
        <td class="delivery-adress__td">Пн&nbsp;-&nbsp;Вс,&nbsp;10&#58;00&nbsp;-&nbsp;20&#58;00</td>
      </tr>
    </thead>
  </table>
</main>
<?php
get_footer();
?>