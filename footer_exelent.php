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
            <a class="footer__col-link" href="<?php echo SITE_URL?>product-category/systems/waterboss/">WaterBoss</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product-category/systems/watermax/">WaterMax</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product-category/systems/aquaphor-pro/">Aquaphor Pro</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Магистральные</h4>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/корпус-аквафор-гросс-20/">Гросс&nbsp;20</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/корпус-аквафор-гросс-10/">Гросс&nbsp;10</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/корпус-аквафор-викинг/">Викинг</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/корпус-аквафор-викинг-миди/">Викинг&nbsp;миди</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/корпус-аквафор-викинг-мини/">Викинг&nbsp;мини</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Обратный&nbsp;осмос</h4>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/аквафор-dwm-101s-морион/">DWM-101S&nbsp;«Морион»</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/аквафор-dwm-201/">DWM-201</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/аквафор-осмо-50-исп-5/">Осмо-50</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/комплект-модулей-для-аквафор-осмо-кла-2/">Осмо&nbsp;Классика</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>product/аквафор-осмо-кристалл-50-исп-4м/">Осмо-Кристалл</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Услуги</h4>
            <a class="footer__col-link" href="<?php echo SITE_URL?>water-analysis">Анализ&nbsp;воды</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>equipment-selection">Подбор&nbsp;оборудивания</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>repair">Сервис&nbsp;и&nbsp;ремонт</a>
            <!--a class="footer__col-link" href="<?php echo SITE_URL?>">Регистрация&nbsp;фильтра</a-->
            <a class="footer__col-link" href="<?php echo SITE_URL?>payment">Оплата&nbsp;и&nbsp;доставка</a>
         </div>
      </div>
      <div class="footer__columns">
        <div class="footer__col">
            <h4 class="footer__col-title">Информация</h4>
            <a class="footer__col-link" href="<?php echo SITE_URL?>договор-оферта">Договор&nbsp;оферты</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>политика-конфиденциальности">Политика&nbsp;конфиденциальности</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>пользовательское-соглашение">Пользовательское&nbsp;соглашение</a>
            <a class="footer__col-link" href="<?php echo SITE_URL?>процесс-передачи-данных">Процесс&nbsp;передачи&nbsp;данных</a>
         </div>
      </div>
      <div class="footer__info">
        <div class="footer__social">
        <h4 class="footer__col-title">+7&nbsp;(499)&nbsp;577&nbsp;03&nbsp;79</h4>
        <p class="footer__col-address footer__col-address_bold">info&#64;aquaphor.email</p>
        <p class="footer__col-address">Московская&nbsp;область,</p>
        <p class="footer__col-address">г.&nbsp;Ступино&nbsp;(142800)</p>
        <p class="footer__col-address">ул.&nbsp;Пристанционная,&nbsp;д.&nbsp;6&nbsp;с.&nbsp;3</p>

         <a href="<?php echo SITE_URL?>" class="footer__cocial-link footer__cocial-link_mastercard"></a>
         <a href="<?php echo SITE_URL?>" class="footer__cocial-link footer__cocial-link_visacard"></a>
         <a href="<?php echo SITE_URL?>" class="fa fa-credit-card footer__cocial-link_creditcard"></a>
        </div>
      </div>

    </div>
    <p class="footer__copyright">&copy;&nbsp;<?php  echo  absint( date('Y' ) ); ?>, ООО «Аквафор Инжиниринг», ИНН 7720460910</p>
  </div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>


</html>
