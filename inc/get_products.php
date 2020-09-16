<?php
  get_template_part('inc/get_page_slug');
/**
 *  Функция отрисовывает товары в зависимости от slug страницы ктегории товара
 */


  function get_products( $category_slug ) {
    ?>
    <div class="row">
  <?php
	// Выполнение запроса по категориям и атрибутам
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		// Использование нескольких таксономий требует параметр relation
		'relation' => 'AND', // значение AND для выборки товаров принадлежащим одновременно ко всем указанным терминам
		// массив для категории имеющей слаг slug-category-1
		array(
		 'taxonomy' => 'product_cat',
		 'field' => 'slug',
		 'terms' => $category_slug,
		),
	),
	// Параметры отображения выведенных товаров
	'posts_per_page' => 100, // количество выводимых товаров
	'post_type' => 'product', // тип товара
	'orderby' => 'title', // сортировка
);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
global $product;
?>
	<!-- Цикл для вывода выбранных товаров -->
	<figure class="col-sm-3 product">
		<a href="<?php echo get_permalink( $loop->post->ID ) ?>">
		  <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
		  <?php
		  if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
		  else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="250px" height="250px" />';
		  ?>
		</a>
		<figcaption>
			<h3 class="product-title"><?php the_title(); ?></h3>
			<div class="product-price"><?php echo $product->get_price_html(); ?></div>
			<div class="text-center">
				<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
			</div>
		</figcaption>
	</figure>

	<?php endwhile; ?>
	<!-- Сброс данных запроса -->
	<?php wp_reset_query(); ?>
</div>
<?php  }
?>