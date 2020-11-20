<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header();
?>
<main class="main">
  <!-- Для дестопа -->
<div class="page-payment-destop">
  <h1 class="title">Способы оплаты</h1>
  <h3 class="sub-title">Наличными</h3>
  <p class="description">
    <span class="description__insert">
      Оплата наличными возможна курьеру,
      мастеру сервисной службы и в любом пункте самовывоза при получении товара.
    </span>
  </p>
  <h3 class="sub-title">Банковской картой</h3>
  <p class="description">
    <span class="description__insert">Оплата картой возможна</span>
    на сайте
    <span class="description__insert">или в любом</span>
    пункте самовывоза.
  </p>
  <h3 class="sub-title">Безналичный расчет</h3>
  <h4 class="description">Физическим лицам:</h4>
  <p class="description">
    <span class="description__insert">
      На стадии оформления заказа вам необходимо верно заполнить ФИО и паспортные данные.
      Счет можно будет распечатать после подтверждения заказа менеджером.
    </span>
  </p>
  <h4 class="description">Юридическим лицам:</h4>
  <p class="description">
    <span class="description__insert">
      На стадии оформления заказа вам необходимо заполнить реквизиты организации.
      Счет можно будет распечатать после подтверждения заказа менеджером.
    </span>
  </p>
  </div>
  <!-- Для мобильной версии -->
  <div class="page-payment-mobile">
  <h3 class="sub-title">При получении</h3>
  <p class="description">
    <span class="description__insert">
      Оплата наличными или картой возможна курьеру,
      мастеру сервисной службы и в любом пункте самовывоза при получении товара.
    </span>
    <h3 class="sub-title">Онлайн</h3>
  <p class="description">
    <span class="description__insert">
      Оплата любой картой онлайн возможна на сайте при оформлении заказа. 
      Для оплаты (ввода реквизитов Вашей карты)
      Вы будете перенаправлены на платёжный шлюз ПАО СБЕРБАНК. 
    </span>
  <p class="description">
    <span class="description__insert">
      Соединение с платёжным шлюзом и передача информации осуществляется в защищённом режиме с использованием протокола шифрования SSL.
      В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa, MasterCard SecureCode,
      MIR Accept, J-Secure для проведения платежа также может потребоваться ввод специального пароля. 
    </span>
  </p>
  <p class="description">
    <span class="description__insert">
      Настоящий сайт поддерживает 256-битное шифрование. 
      Конфиденциальность сообщаемой персональной информации обеспечивается ПАО СБЕРБАНК. 
      Введённая информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. 
      Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платёжных систем МИР, Visa Int., 
      MasterCard Europe Sprl, JCB. 
    </span>
  </p>
</main>
</div>
<?php
get_footer();

?>
