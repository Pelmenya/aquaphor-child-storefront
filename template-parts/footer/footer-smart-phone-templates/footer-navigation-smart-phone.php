<footer class="footer-smart">
<?php echo $slug; ?>
  <a href="<?php echo SITE_URL?>catalog/?slug=catalog" class="footer-smart__item ">
    <div class="footer-smart__item_catalog <?php if ($_GET["slug"] == "catalog") echo "footer-smart__item_catalog_active";?>"></div>
    <p class="footer-smart__text  <?php if ($_GET["slug"] == "catalog") echo "footer-smart__text_active";?>">Каталог</p>
  </a>

  <a href="<?php echo SITE_URL?>discounts/?slug=discounts" class="footer-smart__item">
    <div class="footer-smart__item_discounts  <?php if ($_GET["slug"] == "discounts") echo "footer-smart__item_discounts_active";?>"></div>
    <p class="footer-smart__text <?php if ($_GET["slug"] == "discounts") echo "footer-smart__text_active";?>">Скидки</p>
  </a>
  <div class="footer-smart__item footer-smart__item_help">
    <div class="footer-smart__item_helpImg"></div>
    <p class="footer-smart__text">Помощь</p>
  </div>
  <div class="footer-smart__item footer-smart__item_more">
    <div class="footer-smart__item_moreImg"></div>
    <p class="footer-smart__text">Еще</p>
  </div>
</footer>