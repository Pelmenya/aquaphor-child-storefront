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
  <section class="repair">
    <h1 class="title">Заявка на техническое обслуживание</h1>
  </section-->
 <?php
  //проверяем, существуют ли переменные в массиве POST
  if(!isset($_POST['phone']) and !isset($_POST['filter']) and !isset($_POST['service'])){
  ?>
      <form class="repair__form" name="repair" method="post">
        <input class="repair__name" required type="text" name="user_name" placeholder="Имя">
        <input class="repair__phone" required type="tel" name="phone" placeholder="Телефон" pattern="^(\+7|8)\s?(\(\d{3}\)|\d{3})\s?[\-]?\d{3}[\-]?\d{2}[\-]?\d{2}$">
        <select class="repair__filter" required name="filter" onchange="this.style.color='var(--black-70)'; this.style.fontFamily='Proxima Nova Rg;'">
          <option value="" style="display:none">Тип фильтра</option>
          <option value="1">Комплексная система (Waterboss и другие)</option>
          <option value="2">Предфильтр (Гросс, Викинг)</option>
          <option value="3">Питьевой (DWM, Трио и другие)</option>
        </select>
        <select class="repair__service" required name="service" onchange="this.style.color='var(--black-70)'; this.style.fontFamily='Proxima Nova Rg;'">
          <option value="" style="display:none">Тип услуги</option>
          <option value="1">Установка фильтра</option>
          <option value="2">Замена модулей</option>
          <option value="3">Ремонт и диагностика</option>
          <option value="4">Консультация</option>
        </select>
        <button type="submit" class="repair__button">Заказать</button>
      </form>
  <?php
  } else {
  //показываем форму
  $user_name = $_POST['user_name'];
  $phone = $_POST['phone'];
  $filter = $_POST['filter'];
  $filters = array(
    '1' => 'Комплексная система (Waterboss и другие)',
    '2' => 'Предфильтр (Гросс, Викинг)',
    '3' => 'Питьевой (DWM, Трио и другие)',
  );
  $service = $_POST['service'];
  $services = array(
    '1' => 'Установка фильтра',
    '2' => 'Замена модулей',
    '3' => 'Ремонт и диагностика',
    '4' => 'Консультация',
  );
  $user_name = htmlspecialchars($user_name);
  $phone = htmlspecialchars($phone);
  $filter = htmlspecialchars($filter);
  $service = htmlspecialchars($service);

  $user_name = urldecode($user_name);
  $phone = urldecode($phone);
  $filter = urldecode($filter);
  $service = urldecode($service);

  $user_name = trim($user_name);
  $phone = trim($phone);
  $filter = trim($filter);
  $service = trim($service);

  if (wp_mail("master@aquaphor.email", "Заявка с сайта aquaphor.store", "Имя:".$user_name.". Телефон:".$phone.". Фильтр: ".$filters[$filter]." Обслуживание: ".$services[$service],"From: master@aquaphor.email \r\n")){
      echo "Сообщение успешно отправлено";
    } else {
      echo "При отправке сообщения возникли ошибки";
    }
  }
  ?>
</main>
<?php
get_footer();
?>