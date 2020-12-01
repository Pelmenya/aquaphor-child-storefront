<?php
function set_header_prev_button( $title, $style ){
?>
<svg onClick="window.history.back()" class ="header__prev-page-button" width="11" height="18" viewBox="0 0 11 18">
  <defs>
      <path id="mfv2jkcdba" d="M26.716 28l7.08 7.08c.439.439.439 1.151 0 1.59-.44.44-1.152.44-1.591 0l-7.875-7.875c-.44-.439-.44-1.151 0-1.59l7.875-7.875c.439-.44 1.151-.44 1.59 0 .44.439.44 1.151 0 1.59L26.716 28z"/>
  </defs>
  <g fill-rule="evenodd">
      <g>
          <g transform="translate(-24 -19)">
              <use  fill-rule="nonzero" xlink:href="#mfv2jkcdba"/>
          </g>
      </g>
  </g>
</svg>
<h1 class="header__smart-phone-description-title <?php echo $style;?>"><?php echo $title;?></h1>
<?php
}
?>