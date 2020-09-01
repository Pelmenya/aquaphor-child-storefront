<section class="popup popup-oneclick">
  <div class="popup-oneclick__content">
    <svg width="28" height="27" viewBox="0 0 28 27" fill="none" class="popup__close">
      <line x1="1.93934" y1="25.9393" x2="25.9393" y2="1.93934" stroke=" white" stroke-width="3"/>
      <line x1="2.06066" y1="1.93934" x2="26.0607" y2="25.9393" stroke="white" stroke-width="3"/>
    </svg>
  <?php
  //проверяем, существуют ли переменные в массиве POST
    if(!isset($_POST['phone']) and !isset($_POST['user_name']) and !isset($_POST['email'])){
  ?>
    <h1 class="popup-oneclick__title">Быстрая покупка</h1>
    <form class="popup-oneclick__form" name="popup_oneclick" method="post">
      <div class="popup-oneclick__wrap">
        <input class="popup-oneclick__name" required type="text" name="user_name" placeholder="Введите имя">
        <input class="popup-oneclick__phone" required type="tel" name="phone" placeholder="Введите телефон" pattern="^(\+7|8)\s?(\(\d{3}\)|\d{3})\s?[\-]?\d{3}[\-]?\d{2}[\-]?\d{2}$">
        <input class="popup-oneclick__email" required type="email" name="email" placeholder="Введите @почту" pattern="^[A-Za-z]((\.|-)?[A-Za-z0-9]+)+@[A-Za-z0-9](-?[A-Za-z0-9]+)+(\.[A-Za-z]{2,})+$">
      </div>
      <div class="popup-oneclick__wrap">
      <p class="popup-oneclick__info">Менеджер перезвонит и поможет оформить ваш заказ.</p>
      <?php
        if (is_product()){
          ?>
          <?php
          $product = wc_get_product( get_the_ID() );
          $product_name = $product->get_title();
          ?>
          <div class="popup-oneclick__product">
            <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );?>" class="popup-oneclick__pic" alt="<?php echo $product_name;?>">
            <div class="popup-oneclick__wrap popup-oneclick__wrap_product">
              <h2 class="popup-oneclick__info popup-oneclick__info_title">
              <?php
                echo $product_name;
              ?>
              </h2>
              <p class="popup-oneclick__info">
              <?php
              function chunk_split_unicode($str, $l = 76, $e = "\r\n") {
                  $tmp = array_chunk(
                      preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
                  $str = "";
                  foreach ($tmp as $t) {
                      $str .= join("", $t) . $e;
                  }
                  return $str;
              }
                /* преобразуем строку в массив, для простановки пробелов в цене берем строку задом наперед,
                  разбиваем на чанки по три, и выводим задом наперед
                */
                $product_price = chunk_split_unicode( strrev ($product->get_price()), 3) ;
                echo strrev ($product_price) ;
              ?>
                руб.
              </p>
            </div>
          </div>
          <?php
        }
      ?>
      <button type="submit" class="popup-oneclick__button">Отправить</button>
      <div>
    </form>
  <?php
} else {
    //показываем форму
    $user_name = $_POST['user_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $product = wc_get_product( get_the_ID() );
    $product_name = $product->get_title();
    $product_price = $product->get_price();


    $user_name = htmlspecialchars($user_name);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $product_name = htmlspecialchars($product_name);
    $product_price = htmlspecialchars($product_price);


    $user_name = urldecode($user_name);
    $phone = urldecode($phone);
    $email = urldecode($email);
    $product_name = urldecode($product_name);
    $product_price = urldecode($product_price);

    $user_name = trim($user_name);
    $phone = trim($phone);
    $email = trim($email);
    $product_name = trim($product_name);
    $product_price = trim($product_price);

    if (wp_mail("store@aquaphor.store",
    "Заявка с сайта aquaphor.store",
    "Имя:<br>".$user_name.
    ".<br>Телефон:<br> ".$phone.
    ".<br>Email:<br>".$email.
    ".<br>Название продукта:<br>".$product_name.
    ".<br>Цена:<br>".$product_price.
    "<br>Заявку на покупку с сайта aquaphor.store\r\n")){
        echo "Сообщение успешно отправлено";
      } else {
        echo "При отправке сообщения возникли ошибки";
      }
    }
  ?>
    </div>
</section>
