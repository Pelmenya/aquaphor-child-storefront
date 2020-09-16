<main class="mobil-version">
  <section class="sub-categories">
    <h1 class="sub-categories__title"></h1>
    <div class="sub-categories__card">
      <img class="sub-categories__pic" src="<php echo SITE_URL?>" alt="">
      <div class="sub-categories__wrapper">
        <h3 class="sub-categories__sub-title"></h3>
        <p class="sub-categories__text"></p>
        <p class="sub-categories__price"></p>
      </div>
    </div>
  </section>
</main>
<?php
  $taxonomy     = 'product_cat';
  $orderby      = 'name';
  $show_count   = 0;
  $pad_counts   = 0;
  $hierarchical = 1;
  $title        = '';
  $empty        = 0;
$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title,
  'hide_empty'   => $empty
);
?>
<?php $all_categories = get_categories( $args );
//print_r($all_categories);
foreach ($all_categories as $cat) {
    //print_r($cat);
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;
        echo $category_id;

?>
<?php
        echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>'; ?>
        <?php
        $args2 = array(
          'taxonomy'     => $taxonomy,
          'child_of'     => 0,
          'parent'       => $category_id,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'title_li'     => $title,
          'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
                echo  $sub_category->name ;
                $posts = get_posts( array(
                  'taxonomy'     => $taxonomy,
                  'numberposts' => -1,
                  'posts_per_page' => 40,
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
                  'post_type' => 'product',
                  'category_name' => $sub_category->name,
                  ) );
                  print_r($posts);

                }

        } ?>

    <?php }
}
?>


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
		 'terms' => 'drinking'
		),
	),
	// Параметры отображения выведенных товаров
	'posts_per_page' => 400, // количество выводимых товаров
	'post_type' => 'product', // тип товара
	'orderby' => 'title', // сортировка
);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
global $product;
?>
	<!-- Цикл для вывода выбранных товаров -->
		  <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
      <?php the_title(); ?>
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