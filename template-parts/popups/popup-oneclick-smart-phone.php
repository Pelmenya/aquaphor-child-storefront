<div class="popup popup-more-smart-phone popup-oneclick-smart-phone">
  <div class="popup-more-smart-phone__content popup-more-smart-phone_oneclick popup-more-smart-phone__content_is-closed">
    <svg class="popup-more-smart-phone__close" width="18" height="18" viewBox="0 0 18 18">
      <path fill="#EC8928" d="M17.886.106c-.149-.144-.387-.14-.53.007L9.857 7.61c-.336.326.193.867.53.53L17.887.642c.152-.147.152-.39 0-.537zM8.139 9.85c-.148-.144-.386-.14-.53.008L.111 17.355c-.344.335.192.88.53.53L8.14 10.39c.153-.148.153-.392 0-.539zM.642.114C.313-.216-.227.303.11.644l17.245 17.241c.345.351.88-.183.53-.53L.642.113z"/>
    </svg>
    <?php
    //проверяем, существуют ли переменные в массиве POST
      if(!isset($_POST['phone']) and !isset($_POST['user_name']) and !isset($_POST['email'])){
        if (is_product()){
          ?>
          <?php
          $product = wc_get_product( get_the_ID() );
          $product_name = $product->get_title();
          ?>
        <form class="popup-oneclick-smart-phone__form" name="popup_oneclick_smart_phone" method="post">
          <div class="cart-smart-phone__card cart-smart-phone__card_one-click">
            <a class="cart-smart-phone__pic" href="">
              <img class="cart-smart-phone__pic"  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );?>" class="popup-oneclick__pic" alt="<?php echo $product_name;?>">
            </a>
            <div class="cart-smart-phone__wrap">
              <h1 class="cart-smart-phone__title"><?php echo $product->get_title();?></h1>
              <p class="cart-smart-phone__price">
                <?php echo $product->get_price();?>
                    руб.
              </p>
              <div class="cart-smart-phone__counter-wrap cart-smart-phone__wrap_one-click">
                <button type="button" class="cart-smart-phone__button minus"><span>-</span></button>
                <input name="product_counter" class="cart-smart-phone__counter cart-smart-phone__counter_one-click" type="text" value="1">
                <button type="button" class="cart-smart-phone__button plus">+</button>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
          <input class="popup-oneclick-smart-phone__name" required type="text" name="user_name" placeholder="Введите имя">
          <input class="popup-oneclick-smart-phone__phone" required type="tel" name="phone" placeholder="Введите телефон" pattern="^(\+7|8)\s?(\(\d{3}\)|\d{3})\s?[\-]?\d{3}[\-]?\d{2}[\-]?\d{2}$">
          <input class="popup-oneclick-smart-phone__email" required type="email" name="email" placeholder="Введите @почту" pattern="^[A-Za-z]((\.|-)?[A-Za-z0-9]+)+@[A-Za-z0-9](-?[A-Za-z0-9]+)+(\.[A-Za-z]{2,})+$">
          <button type="submit" class="popup-oneclick-smart-phone__button">Отправить</button>
          <p class="popup-oneclick-smart-phone__text">Менеджер перезвонит для подтверждения заказа</p>
        </form>
      <?php
      } else {
        //показываем форму
        $user_name = $_POST['user_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $product_counter = $_POST["product_counter"];

        $product = wc_get_product( get_the_ID() );
        $product_name = $product->get_title();
        $product_price = $product->get_price();

        $products_price = $product_price*$product_counter;



        $user_name = htmlspecialchars($user_name);
        $phone = htmlspecialchars($phone);
        $email = htmlspecialchars($email);
        $product_counter = htmlspecialchars($product_counter);
        $product_name = htmlspecialchars($product_name);
        $product_price = htmlspecialchars($product_price);
        $products_price = htmlspecialchars($products_price);


        $user_name = urldecode($user_name);
        $phone = urldecode($phone);
        $email = urldecode($email);
        $product_counter = urldecode($product_counter);

        $product_name = urldecode($product_name);
        $product_price = urldecode($product_price);
        $products_price = urldecode($products_price);


        $user_name = trim($user_name);
        $phone = trim($phone);
        $email = trim($email);
        $product_counter = trim($product_counter);

        $product_name = trim($product_name);
        $product_price = trim($product_price);
        $products_price = trim($products_price);

        if (wp_mail("lyapindm@ya.ru",
        "Заявка с сайта aquaphor.store",
        "Кол-во товара: <br>".$product_counter.
        "<br>Цена за весь товар:<br>".$products_price.
        "<br>Имя:<br>".$user_name.
        ".<br>Телефон:<br> ".$phone.
        ".<br>Email:<br>".$email.
        ".<br>Название товара:<br>".$product_name.
        ".<br>Цена за ед. товара:<br>".$product_price.
        "<br>Заявка на покупку с сайта aquaphor.store\r\n")){
            echo "Сообщение успешно отправлено";
          } else {
            echo "При отправке сообщения возникли ошибки";
          }
        }
    ?>
  </div>
</div>

