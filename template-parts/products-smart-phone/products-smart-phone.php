<?php
  get_template_part('inc/get_page_slug');
  get_template_part('inc/get_products');
?>
<main class="mobil-version">
  <section class="products-smart-phone">
    <div class="products-smart-phone__wrapper">
      <h1 class="products-smart-phone__title"><?php the_title(); ?></h1>
        <svg  class="products-smart-phone__button" width="12" height="17" viewBox="0 0 12 17">
          <path fill="#28293C" fill-opacity=".4" d="M1.025 14.21l1.918 1.916 1.894-1.915c.328-.337.87.17.515.515l-2.15 2.172c-.135.136-.381.136-.516 0L.51 14.728c-.356-.355.173-.857.515-.516v-.001zm8.075.25V2.85c0-.478.726-.468.726 0V14.46c0 .482-.726.471-.726 0zM11.367 3.1L9.45 1.185 7.556 3.1c-.328.337-.87-.17-.515-.515L9.191.414c.135-.135.38-.135.515 0l2.176 2.171c.356.354-.172.856-.515.515zm-8.071-.249V14.46c0 .486-.726.468-.726 0V2.85c0-.49.726-.469.726 0z"/>
        </svg>
    </div>
    <div class="products-smart-phone__container">
      <?php
        get_products(get_page_slug());
      ?>
    </div>
  </section>
</main>

