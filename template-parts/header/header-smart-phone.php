<?php

function dataToStrRus($str) {
  $strObj = preg_split('/\./', $str, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
  $day = $strObj[0];
  $month = $strObj[1];
  $year = $strObj[2];
  $objMonth = [
    'января',
    'февраля',
    'марта',
    'апреля',
    'мая',
    'июня',
    'июля',
    'августа',
    'сентября',
    'октября',
    'ноября',
    'декабря',
  ];
  return $day ." " . $objMonth[$month - 1];
}


function aquaphor_smart_phone_endpoint_title( $title, $id ) {

  if ( is_wc_endpoint_url( 'my-account' ) ) {
    $title = "Добро пожаловать";
  }
  elseif ( is_wc_endpoint_url( 'orders' ) ) {
      $title = "Заказы";
  }
  elseif ( is_wc_endpoint_url( 'edit-account' ) ) {
      $title = "Ваш профиль";
  }
  elseif ( is_view_order_page() ){
    // Вытаскиваем id заказа и его дату для хедера
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    /* Путь до параметров запроса */
    $url_str = substr($url[0], 0, -1);
    $url_array = preg_split('/\//', $url_str, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
    $title = $url_array[count($url_array) - 1];
    $order_title = wc_get_order($title);
    $title ="Заказ " . $title . " от " . dataToStrRus(wc_format_datetime( $order_title->get_date_created() ));
  }
  return $title;

}

add_filter( 'the_title', 'aquaphor_smart_phone_endpoint_title', 10, 2 );

 get_template_part('template-parts/header/header-smart-phone-templates/set_header_prev_button');
?>

<div class="header header_smart-phone
  <?php
    if (is_account_page()||is_cart()||is_checkout())
      echo 'header_smart-phone_align';
  ?>
  <?php
    if (is_front_page()){
    if ($_GET["intro"] !== "false") echo 'header_smart-phone_is-closed';
    }
  ?>
  ">
  <?php
    if (is_product() ) {
      get_template_part('template-parts/header/header-smart-phone-templates/header__prev-page-product-button');
      get_template_part('template-parts/header/header-smart-phone-templates/header__search-and-logo');
    }
    else {
      if (is_checkout()||is_account_page()||is_cart()){
        set_header_prev_button(get_the_title(), "header__smart-phone-description-title_align-center");
      }
      else {
          get_template_part('template-parts/header/header-smart-phone-templates/header__search-button');
          get_template_part('template-parts/header/header-smart-phone-templates/header__search-and-logo');
      }
    };

  ?>
</div>

<div class="buffer-for-sticky"></div>