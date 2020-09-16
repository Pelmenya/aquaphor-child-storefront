<?php
  get_template_part('inc/get_page_slug');
/**
 *  Функция отрисовывает товары в зависимости от slug страницы ктегории товара
 */
  get_page_slug();

  function get_products( $category_slug ) {
    echo $category_slug;
  }

  get_products( get_page_slug()  )
?>