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
<div class="main">
  <h1 class="title title_about-company">О компании</h1>
  <p class="description">
    <span class="description__insert">
    На сегодняшний день АКВАФОР - это крупнейшее в Европе производство сорбентов и фильтров для воды. 
    Занимает около трети российского рынка по системам водоочистки и работает с 1992 года. 
    Компания располагает собственным исследовательским центром с химическим, микробиологическим, 
    конструкторским и технологическим отделами. 
    </span>
  </p>
  <p class="description">
    <span class="description__insert">
      В отличие от большинства конкурентов, в компании АКВАФОР реализован полный цикл выпуска
      своей продукции: от научной идеи и разработки до продажи готового изделия. Производство
      фильтров полностью автоматизировано, а для их выпуска используются материалы, конструкции
      и технологии, разработанные собственными силами и защищенные патентами США, России и других
      стран.
    </span>
  </p>
  <p class="description">
    <span class="description__insert">
      Компания ориентирована на высокое качество выпускаемой продукции, что подтверждено сертификатом
      соответствия системы менеджмента качества требованиям международного стандарта ISO 9001:2000. Фильтры
      Аквафор протестированы независимыми лабораториями по Американским стандартам NSF-42 B NSF-53 и
      рекомендованы Институтом токсикологии Минздрава РФ для использования при приготовлении детского
      питания в домашних условиях. Продукция защищена 23 патентами России и 7 патентами США.
      В июле 2007 года продукция был присужден сертификат качества LGA. Качество выпускаемой продукции было
      проверено и подтверждено известной немецкой корпорацией LGA на полное соответствие международным и
      европейским стандартам.
    </span>
  </p>
  <h3 class="sub-title">Реквизиты</h3>
  <h4 class="description">Реализация продукции:</h4>
  <p class="description">
    <span class="description__insert description__insert_about-company">
      ИП Ефимов А.В. ИНН 504504369609
      ОГРНИП 313504526100015, ОКПО 0187919682
      Юридический адрес: г. Ступино, ул. Пристанционная 6с3
      ПАО &laquo;Сбербанк&raquo;, БИК 044525225
    </span>
  </p>
  <h4 class="description">Информационная поддержка:</h4>
  <p class="description">
    <span class="description__insert description__insert_about-company">
      ООО &laquo;Аквафор Инжиниринг&raquo;ИНН7720460910
      ОГРНИП 313504526100015, ОКПО 0187919682
      Юридический адрес: г. Ступино, ул. Пристанционная 6с3
      ПАО &laquo;Сбербанк&raquo;,БИК 044525225
    </span>
  </p>
</div>
<?php
get_footer();

?>