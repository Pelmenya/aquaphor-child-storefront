<?php
function set_header_prev_button( $title, $style ){
?>
<svg onClick="window.history.back()" class="header__prev-page-button" width="18" height="18" viewBox="0 0 18 18">
  <path fill="#28293C" d="M9 16.875c-.003-.098-.043-.201-.113-.27L.904 8.625 8.883.645c.351-.338-.193-.883-.53-.531L.11 8.356c-.147.148-.147.385 0 .531l8.247 8.249c.224.229.643.091.643-.261zm9-8.25c0 .208-.167.375-.375.375h-15c-.208 0-.375-.167-.375-.375s.167-.375.375-.375h15c.208 0 .375.167.375.375z"/>
</svg>
<h1 class="header__smart-phone-description-title <?php echo $style;?>"><?php echo $title;?></h1>
<?php
}
?>