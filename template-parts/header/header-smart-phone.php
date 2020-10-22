<?php

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
  return $title;
}

add_filter( 'the_title', 'aquaphor_smart_phone_endpoint_title', 10, 2 );

 get_template_part('template-parts/header/header-smart-phone-templates/set_header_prev_button');
?>

<div class="header header_smart-phone
  <?php
    if (is_account_page())
      echo 'header_smart-phone_align';
  ?>">
  <?php
    if (is_product() ) {
      get_template_part('template-parts/header/header-smart-phone-templates/header__prev-page-product-button');
      get_template_part('template-parts/header/header-smart-phone-templates/header__search-and-logo');
    }
    else {
      if (is_account_page()){
        set_header_prev_button(get_the_title(), "");
      } else {
        get_template_part('template-parts/header/header-smart-phone-templates/header__search-button');
        get_template_part('template-parts/header/header-smart-phone-templates/header__search-and-logo');
      }
    };
/*
    if ( is_account_page() ) {
      echo 'Это my-account';
    }
    else {
      echo 'NO!!!';
    }?>
    <?php
    if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
    }

*/
  ?>
</div>
<div class="buffer-for-sticky"></div>