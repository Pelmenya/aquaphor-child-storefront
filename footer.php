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
  <?php wc_get_account_menu_items();?>

	<footer class="footer">
  <div class="footer__container">
    <div class="footer__wrap">
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Комплексные</h4>
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
            <h4 class="footer__col-title">Обратный&nbsp;осмос</h4>
            <a class="footer__col-link" href="#">DWM-101S&nbsp;«Морион»</a>
            <a class="footer__col-link" href="#">DWM-201</a>
            <a class="footer__col-link" href="#">Осмо-50</a>
            <a class="footer__col-link" href="#">Осмо&nbsp;Классика</a>
            <a class="footer__col-link" href="#">Осмо-Кристалл</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Услуги</h4>
            <a class="footer__col-link" href="#">Анализ&nbsp;воды</a>
            <a class="footer__col-link" href="#">Подбор&nbsp;оборудивания</a>
            <a class="footer__col-link" href="#">Сервис&nbsp;и&nbsp;ремонт</a>
            <a class="footer__col-link" href="#">Регистрация&nbsp;фильтра</a>
            <a class="footer__col-link" href="#">Оплата&nbsp;и&nbsp;доставка</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Информация</h4>
            <a class="footer__col-link" href="#">Договор&nbsp;оферты</a>
            <a class="footer__col-link" href="#">Политика&nbsp;конфиденциальности</a>
            <a class="footer__col-link" href="#">Пользовательское&nbsp;соглашение</a>
            <a class="footer__col-link" href="#">Процесс&nbsp;передачи&nbsp;данных</a>
         </div>
      </div>
      <div class="footer__info">
        <div class="footer__social">
        <h4 class="footer__col-title">+7&nbsp;(499)&nbsp;577&nbsp;03&nbsp;79</h4>
        <p class="footer__col-address" href="#">info&#64;aquaphor.email</p>
        <p class="footer__col-address" href="#">Московская&nbsp;область,</p>
        <p class="footer__col-address" href="#">г.&nbsp;Ступино&nbsp;(142800)</p>
        <p class="footer__col-address" href="#">ул.&nbsp;Пристанционная,&nbsp;д.&nbsp;6&nbsp;с.&nbsp;3</p>

         <a href="#" class="footer__cocial-link footer__cocial-link_mastercard"></a>
         <a href="#" class="footer__cocial-link footer__cocial-link_visacard"></a>
         <a href="#" class="fa fa-credit-card footer__cocial-link_creditcard"></a>
        </div>
      </div>

    </div>
    <p class="footer__copyright">&copy;&nbsp;<?php  echo  absint( date('Y' ) ); ?>, ИП Ефимов А.В., ИНН 504504369609, ОГРН 313504526100015</p>
  </div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
