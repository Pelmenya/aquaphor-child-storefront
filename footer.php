<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer class="footer" role="contentinfo">
  <div class="footer__container">
    <div class="footer__wrap">
      <div class="footer__info">
        <img class="footer__logo" src="http://aquaphor.store/wp-content/uploads/2020/03/logo_white.png" alt="Логотип Аквафор">
        <p class="footer__copyright">ООО «Аквафор Инжиниринг» &copy; <?php  echo  absint( date('Y' ) ); ?></p>
        <div class="footer__cocial">
         <i class="footer__cocial-link"></i>
         <i class="footer__cocial-link"></i>
         <i class="footer__cocial-link"></i>
         <i class="footer__cocial-link"></i>
        </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Системы</h4>
            <a class="footer__col-link" href="#">WaterBoss</a>
            <a class="footer__col-link" href="#">WaterMax</a>
            <a class="footer__col-link" href="#">Аквафор</a>
            <a class="footer__col-link" href="#">Aquaphor Pro</a>
            <a class="footer__col-link" href="#">Колонны</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Магистральные</h4>
            <a class="footer__col-link" href="#">Гросс&nbsp;20</a>
            <a class="footer__col-link" href="#">Гросс&nbsp;10</a>
            <a class="footer__col-link" href="#">Викинг</a>
            <a class="footer__col-link" href="#">Викинг&nbsp;миди</a>
            <a class="footer__col-link" href="#">Викинг&nbsp;мини</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Системы</h4>
            <a class="footer__col-link" href="#">WaterBoss</a>
            <a class="footer__col-link" href="#">WaterMax</a>
            <a class="footer__col-link" href="#">Аквафор</a>
            <a class="footer__col-link" href="#">Aquaphor Pro</a>
            <a class="footer__col-link" href="#">Колонны</a>
         </div>
      </div>


    </div>
  </div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
