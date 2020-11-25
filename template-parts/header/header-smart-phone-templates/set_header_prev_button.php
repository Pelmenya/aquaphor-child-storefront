<?php
function set_header_prev_button( $title, $style ){
?>
<svg onClick="window.history.back()" class="header__prev-page-button" width="18" height="18" viewBox="0 0 18 18">
  <path fill="#28293C" d="M2.414 8l6.293 6.293c.39.39.39 1.024 0 1.414-.39.39-1.024.39-1.414 0l-7-7c-.39-.39-.39-1.024 0-1.414l7-7c.39-.39 1.024-.39 1.414 0 .39.39.39 1.024 0 1.414L2.414 8z" transform="translate(-24 -22) matrix(-1 0 0 1 33 22) matrix(-1 0 0 1 9 0)"/>
</svg>
<h1 class="header__smart-phone-description-title <?php echo $style;?>"><?php echo $title;?></h1>
<?php
}
?>