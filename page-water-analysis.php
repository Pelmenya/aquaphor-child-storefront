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

get_template_part('inc/view_array');
get_header();
?>
<main class="main desktop-is-close">
  <h1 class="title">Анализ воды</h1>
  <h3 class="sub-title">Подготовка</h3>
  <ul class="records">
    <li>
      Набирать воду необходимо в пластиковую бутылку из-под негазированной минеральной воды (нельзя использовать тару
      из-под сладкой газировки или химических веществ).
    </li>
    <li>
      Рекомендуется использовать емкость объемом 1,0 - 1,5 л. Перед отбором пробы её нужно ополоснуть отбираемой
      водой, чтобы исключить наличие посторонних примесей и искажение результата анализа воды.
    </li>
    <li>
      Воду в емкость налить до перелива через край, затем налить отбираемую воду в пробку и закрыть емкость так,
      чтобы в ней не было пузырьков воздуха.
    </li>
    <li>
      Проба воды должна быть доставлена на анализ в течение суток.
    </li>
  </ul>
  <h3 class="sub-title">Передача</h3>
  <p class="description">
    <span class="description__link">Розничный клиент</span>
    <span class="description__insert">
      может оставить свою пробу в любом из наших официальных магазинов:
    </span>
  </p>
  <ul class="records">
    <li>Ступино; ул. Проспект победы, д. 63; ТЦ Курс; 10:00 - 22:00</li>
    <li>Ступино; ул. Пристанционная, д. 11/63; ТК Компас; 08:30 - 18:30</li>
    <li>Ступино; ул Горького, д. 26; ТЦ ОКА; 10:00 - 20:00</li>
    <li>Коломна; ул. Октябрьской революции, д. 362; ТЦ РИО; 10:00 - 21:00</li>
    <li>Люберцы; п Октябрьский ул. Ленина, д. 47; ТЦ Текстиль Профи; 10:00 - 21:00</li>
    <li>Люберцы; Октябрьский проспект д. 112; ТЦ Выходной; 10:00 - 22:00</li>
    <li>Чехов; Симферопольское ш, д.1; ТЦ Карусель; 09:00 - 19:00</li>
    <li>Подольск; ул. Федорова, д. 19; ТЦ Европа; 10:00 - 20:00</li>
    <li>Подольск; Свердлова, д. 26; ТЦ Галерея; 10:00 - 22:00</li>
    <li>Домодедово; мкрн Авиационный, пр-т Академика Туполева, д.2; ТЦ Торговый город; 10:00 - 20:00</li>
    <li>Домодедово; ул. Кирова с. 28; ТЦ Лента; 10:00 - 21:00</li>
    <li>Раменское; ул. Молодежная д. 20; ТЦ АТАК; 10:00 - 20:00</li>
    <li>Видное; Жуковский проезд 3А; ТЦ Атак; 10:00 - 21:00</li>
    <li>Серпухов; ул Ворошилова д. 139; ТЦ Лето; 10:00 - 21:00</li>
    <li>Рязань; Московское ш 65А; ТЦ М5 МОЛЛ; 10:00 - 22:00</li>
  </ul>
  <p class="description">
    <span class="description__link">Оптовым клиентам</span>
    <span class="description__insert">
      доступна бесплатная услуга передачи пробы нашему курьеру.
    </span>
  </p>
  <h3 class="sub-title">Анализ</h3>
  <p class="description">
    <span class="description__insert">
      В течение недели мы отправим результаты анализа на ваш email. При необходимости наш специалист
      проконсультирует вас и даст рекомендации по подбору оборудования.
    </span>
  </p>
</main>

<main class="water-analysis-smart">
  <div class="water-analysis-smart__wrapper">
    <img class="water-analysis-smart__pic" src="<?php echo SITE_URL;?>wp-content/uploads/2020/12/water-analysis-page.png" alt="Анализ воды">
  </div>
  <div class="swiper-container water-analysis-smart__slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide water-analysis-smart__slide">
        <ul class="water-analysis-smart__list">
          <li>
            &bull; Возьмите литровую пластиковую бутылку только из-под негазированной минеральной воды.
          </li>
          <li>
            &bull; Ополосните её отбираемой водой, чтобы исключить наличие посторонних примесей.
          </li>
          <li>
            &bull; Налейте до перелива через край в бутылку и пробку. Закройте так, чтобы в бутылке не было пузырьков воздуха.
          </li>
          <li>
            &bull; Проба воды должна быть доставлена на анализ в течение суток.
          </li>
        </ul>
      </div>
      <div class="swiper-slide water-analysis-smart__slide">
      <p>Выберите место в котором вам будет удобнее оставить свою пробу воды:</p>
      <select placeholder="Выберите город" name="list-sourse" id="">
        <option value="0">Ступино</option>
        <option value="1">Раменоское</option>
        <option value="2">Чехов</option>
        <option value="3">Рязань</option>
        <option value="4">Коломна</option>
        <option value="5">Серпухов</option>
        <option value="6">Домодедово</option>
        <option value="7">Люберцы</option>
        <option value="8">Видное</option>
      </select>
      <div class="wrapper-water-analysis_points-sale">
       
      </div>
      </div>
      <div class="swiper-slide water-analysis-smart__slide">
        fasdf
      </div>
    </div>
    <div class="swiper-pagination water-analysis-smart__pagination"></div>
    <?php
      get_template_part('template-parts/footer/footer-smart-phone-templates/footer-water-analysis-smart-phone');
    ?>
  </div>
</main>
<?php
get_footer();
  $table= get_postdata( 1419 );
  echo $table['Content'];
?>