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

<h1 class="title-contacts">Контактная информация
  <div class="information">
    <p class="information__contacts">8 (499) 577 03 79</p>
    <p class="information__contacts">info@aquaphor.email</p>
    <p class="information__job-time">Режим работы:</p>
    <p class="information__job-time">пн-пт 9:00 - 20:00</p>
  </div>
</h1>
<iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A7dd2c27b6a8a2c7be3373d691dd30c8aac896950c46253d10cc72d54205b4b37&amp;source=constructor" width="100%" height="610" frameborder="0">
</iframe>

<?php
get_footer();
?>