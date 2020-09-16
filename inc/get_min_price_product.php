<?php
/**
 * Функкция получает Slug категории и ищет продукт в категории с минимальной ценой
 * возвращает массив с ценой, url изображения продукта, название продукта для Alt
 */
function get_min_price_product($category_slug) {
	// Выполнение запроса по категориям и атрибутам
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		// массив для категории
		array(
		 'taxonomy' => 'product_cat',
		 'field' => 'slug',
		 'terms' => $category_slug,
		),
	),
	'post_type' => 'product', // тип товара
);

$loop = new WP_Query( $args );
  global $product_img_url;
  global $product_title;
  global $products;
  $product_price = 1000000000;
  while ( $loop->have_posts() ) : $loop->the_post();
    global $product;
    woocommerce_show_product_sale_flash( $post, $product );
     if ( $product_price > $product->get_price() ){
        $product_price = $product->get_price();
        $product_img_url = wp_get_attachment_url( get_post_thumbnail_id($product->id), 'thumbnail' );
        $product_title = $product->get_title();
    }
  endwhile;
wp_reset_query();
  return [
    "img_url" => $product_img_url,
    "title"   => $product_title,
    "price"   => $product_price,
  ];
};
?>
