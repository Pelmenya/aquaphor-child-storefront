<?php
get_template_part('inc/get_top_term');
?>

<div class="popup popup-more-smart-phone  popup-oneclick-smart-phone">
  <div class="popup-more-smart-phone__content popup-more-smart-phone_oneclick popup-more-smart-phone__content_is-closed">
  <svg class="popup-more-smart-phone__close" width="16" height="16" viewBox="0 0 16 16">
      <defs>
        <path id="cnqolwu26a" d="M14.049.335c.446-.447 1.17-.447 1.616 0 .447.446.447 1.17 0 1.616L9.616 8l6.05 6.049c.446.446.446 1.17 0 1.616-.447.447-1.17.447-1.617 0L8 9.616l-6.049 6.05c-.414.414-1.068.443-1.517.088l-.1-.089c-.446-.446-.446-1.17 0-1.616L6.385 8 .334 1.951c-.446-.446-.446-1.17 0-1.616.447-.447 1.17-.447 1.617 0L8 6.384z"/>
      </defs>
      <g fill="none" fill-rule="evenodd">
          <g>
              <g>
                  <g transform="translate(-173 -206) translate(0 182) translate(173 24)">
                      <use fill="#EC8928" fill-rule="nonzero" xlink:href="#cnqolwu26a"/>
                  </g>
              </g>
          </g>
      </g>
    </svg>
    <?php
    //проверяем, существуют ли переменные в массиве POST
      if(!isset($_POST['phone']) and !isset($_POST['user_name']) and !isset($_POST['email'])){
        if (is_product()){
          ?>
          <?php
          $product = wc_get_product( get_the_ID() );
          $product_page_link = get_page_link($product->id);
          $product_name = $product->get_title();
          ?>
        <form class="popup-oneclick-smart-phone__form" name="popup_oneclick_smart_phone" method="post">
          <div class="cart-smart-phone__card cart-smart-phone__card_between cart-smart-phone__card_one-click">
            <div class="cart-smart-phone__wrap-row">
              <a class="cart-smart-phone__pic" href="<?php echo $product_page_link;?>">
                <img class="cart-smart-phone__pic"  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );?>" class="popup-oneclick__pic" alt="<?php echo $product_name;?>">
              </a>
              <div class="cart-smart-phone__wrap">
                <h1 class="cart-smart-phone__title"><?php echo $product->get_title();?></h1>
                <p class="cart-smart-phone__category">
                  <?php
                    $top_category = get_top_term('product_cat', $product_id);
                    echo $top_category->name;
                  ?>
                </p>
                <p class="cart-smart-phone__price">
                  <?php echo $product->get_price();?>
                      руб.
                </p>
              </div>
            </div>
            <div class="cart-smart-phone__counter-wrap cart-smart-phone__wrap_one-click">
              <button type="button" class="cart-smart-phone__button plus">+</button>
              <input name="product_counter" class="cart-smart-phone__counter cart-smart-phone__counter_one-click" type="text" value="1">
              <button type="button" class="cart-smart-phone__button minus"><span>-</span></button>
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

