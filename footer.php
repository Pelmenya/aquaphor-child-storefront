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
    <div class="footer__info">
        <img class="footer__logo" src="http://aquaphor.store/wp-content/uploads/2020/03/logo_white.png" alt="Логотип Аквафор">
        <p class="footer__copyright">ООО&nbsp;«Аквафор&nbsp;Инжиниринг»&nbsp;&copy;&nbsp;<?php  echo  absint( date('Y' ) ); ?></p>
        <div class="footer__cocial">
         <a href="#" class="footer__cocial-link footer__cocial-link_vk"></a>
         <a href="#" class="footer__cocial-link footer__cocial-link_ok"></a>
         <a href="#" class="footer__cocial-link footer__cocial-link_fb"></a>
         <a href="#" class="footer__cocial-link footer__cocial-link_in"></a>
        </div>
        <div class="footer__cocial">
         <a href="#" class="footer__cocial-link footer__cocial-link_mastercard"></a>
         <a href="#" class="footer__cocial-link footer__cocial-link_visacard"></a>
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

    </div>
  </div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
