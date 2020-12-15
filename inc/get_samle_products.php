<?php
$tdh = ''; //:Жесткость
$ferrum = ''; //Железо
$mn = ''; //Марганец
if (isset($_REQUEST['tdh'])) {
    $tdh = $_REQUEST['tdh'];
}
if (isset($_REQUEST['ferrum'])) {
    $ferrum = $_REQUEST['ferrum'];
}
if (isset($_REQUEST['mn'])) {
    $mn = $_REQUEST['mn'];
}

$args = array(
    'post_type' => array('product', 'product_variation'),
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'product', //Название таксономии - в WP идёт 
            'field' => 'name',             //с приставкой pa_"слуг" заданный вами при заведении
            'terms' => $tdh,        //атрибута
            'operator' => 'IN',
        ), array(
            'taxonomy' => 'product', 
            'field' => 'name',
            'terms' => $ferrum,
            'operator' => 'IN',
        ), array(
            'taxonomy' => 'product', 
            'field' => 'name',
            'terms' => $mn,
            'operator' => 'IN',
        )
    )
);

if (!empty($tdh) || !empty($ferrum) || !empty($mn)) {
    $query = new WP_Query($args); //Запрос в БД сайта
    global $wp_query;
    $wp_query = $query;//Заменяем глобальный объект
}
//Далее идёт стандартный вывод, так как Wordpress берёт данные из объекта wp_query
// wc_get_template('archive-product.php'); //Подключение шаблона woo из папки \woocommerce\templates\
wp_reset_query();//Сброс глобального объекта

?>

