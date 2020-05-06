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
  <h1 class="title">Способы оплаты</h1>
  <h3 class="sub-title">Наличными</h3>
  <p class="description">
    <span class="description__insert">
      Оплата наличными возможна курьеру,
      мастеру сервисной службы и в любом пункте самовывоза при получении товара.
    </span>
  </p>
  <h3 class="sub-title">Банковской картой</h3>
  <p class="description">
    <span class="description__insert">Оплата картой возможна</span>
    на сайте
    <span class="description__insert">или в любом</span>
    пункте самовывоза.
  </p>
  <h3 class="sub-title">Безналичный расчет</h3>
  <h4 class="description">Физическим лицам:</h4>
  <p class="description">
    <span class="description__insert">
      На стадии оформления заказа вам необходимо верно заполнить ФИО и паспортные данные.
      Счет можно будет распечатать после подтверждения заказа менеджером.
    </span>
  </p>
  <h4 class="description">Юридическим лицам:</h4>
  <p class="description">
    <span class="description__insert">
      На стадии оформления заказа вам необходимо заполнить реквизиты организации.
      Счет можно будет распечатать после подтверждения заказа менеджером.
    </span>
  </p>
</main>
<?php
get_footer();

?>