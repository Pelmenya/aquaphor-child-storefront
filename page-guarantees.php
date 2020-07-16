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
  <h1 class="title">Гарантии</h1>
  <h3 class="sub-title">Наличными</h3>
  <p class="description">ООО «Аквафор Инжиниринг»
    <span class="description__insert">является представительством компании</span>
      Аквафор
    <span class="description__insert">в Москве и Московской области.<br>При покупке в нашем интернет-магазине или физической точке продаж вы получаете товар, бланк заказа, чек и гарантийный талон. Вся продукция сертифицирована и имеет официальную гарантию производителя.<br>
      На все фильтры с отдельным краном гарантия
    </span>
      1 год.
    <span class="description__insert">На комплексные системы водоочистки WaterBoss и WaterMax гарантия</span>
      5 лет.
      <span class="description__insert">С подробными правилами покупки вы можете ознакомиться</span>
      <a class="description__link" href="<?php echo SITE_URL?>договор-оферта/">здесь</a>.
  </p>
  <h3 class="sub-title">Возврат</h3>
  <p class="description">
    <span class="description__insert">Срок возврата товара надлежащего качества составляет</span>
    30 дней
    <span class="description__insert">с момента получения товара.
      Возврат переведённых средств, производится на ваш банковский счёт
    </span>
    от 5 до 30
    <span class="description__insert"> рабочих дней (срок зависит от банка выпустившего вашу банковскую карту).</span>
  </p>
</main>
<?php
get_footer();

?>