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
	<section class="for-smart-phone">
		<div class="swiper-container equipment-select-smart__slider">
			<div class="swiper-wrapper">
					<!-- Slides -->
				<div class="swiper-slide equipment-selection-smart__slide">
				 	<p class="description">
					 <span	span class="description__insert">
							Если у вас есть <a>анализ воды</a>, введите данные и калькулятор
							подберет нужное оборудование.
						</span>
					</p>
					<section class="equipment-selection">
				 
						<form class="equipment-selection__form" name="equipmentSelection">
							<div class="equipment-selection__choice">
							 <div class="equipment-selection__choice-col">
								<div class="equipment-selection__choice-item">
								 <h4 class="description">Источник воды:</h4>
						<form action="formdata" method="post" name="selection-sourse">
							<select name="list-sourse">
								<option
									value="0"
									checked
									name="water_source"
									id="water_source_zero"
									>Выберите пункт</option
								>
								<option value="1" name="water_source" id="water_source_one"
									>Водопровод</option
								>
								<option value="2" name="water_source" id="water_source_two"
									>Скважина</option
								>
								<option value="3" name="water_source" id="water_source_three"
									>Колодец</option
								>
							</select>
						</form>
					</div>

					<div class="equipment-selection__choice-item">
						<h4 class="description">Состояние воды:</h4>
						<form action="formdata" method="post" name="selection-condition">
							<select name="list-sourse__condition">
								<option
									value="0"
									checked
									name="pa_clear_turbidity"
									id="pa_clear_turbidity_zero"
									>Выберите пункт</option
								>
								<option
									value="1"
									name="pa_clear_turbidity"
									id="pa_clear_turbidity_one"
									>Прозрачная</option
								>
								<option
									value="2"
									name="pa_clear_turbidity"
									id="pa_clear_turbidity_two"
									>Мутная</option
								>
							</select>
						</form>
					</div>

					<div class="equipment-selection__choice-item">
						<h4 class="description">Необходимая вода:</h4>
						<form action="formdata" method="post" name="selection-sourse">
							<select name="list-sourse">
								<option
									value="0"
									type="radio"
									checked
									name="choiceTaste"
									id="choiceTaste_zero"
									>Выберите пункт</option
								>
								<option
									value="1"
									type="radio"
									name="choiceTaste"
									id="choiceTaste_one"
									>Питьевая</option
								>
								<option
									value="2"
									type="radio"
									name="choiceTaste"
									id="choiceTaste_two"
									>Техническая</option
								>
							</select>
						</form>
					</div>

					<div class="equipment-selection__choice-item">
						<h4 class="description">Точки водоразбора:</h4>
						<input
							class="equipment-selection__point-water"
							type="range"
							value="5"
							min="1"
							max="5"
							step="1"
							name="pa_water_points"/>
						<label class="equipment-selection__choice-color equipment-selection__choice-color_water-points"
							for="pa_water_points">От 1 до 5</label>
					</div>
							</div>
						</form>
					</section>
				</div>
				<div class="swiper-slide equipment-selection-smart__slide">
					<div class="equipment-selection__info">
						<p class="equipment-selection__description">
						Введите данные полученные с помощью <a href="<?php echo SITE_URL?>water-analysis" class="equipment-selection__link"> нашего анализа</a> или из другой лаборатории.
						</p>
					</div>
					<div class="equipment-selection__table">
		
						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem"  for="pa_ph">Реакция среды pH:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_ph">
						</div>

						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_oxidability">Окисляемость:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_oxidability">
						</div>
		
						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_tds">Минерализация:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_tds">
						</div>
					
						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_mn">Марганец:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_mn">
						</div>

						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_tdh">Жесткость:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_tdh">
						</div>
	
						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_ftor">Фториды:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_ftor">
						</div>

						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_ferrum">Железо:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_ferrum">
						</div>

						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_h2s">Сероводород:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_h2s">
						</div>

						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_nitrate">Нитраты:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_nitrate">
						</div>
				
						<div class="equipment-selection__choice-item choice-item__wight ">
							<label class="equipment-selection__elem" for="pa_sulphide">Сульфиды:</label>
							<input class="equipment-selection__elem-value" placeholder="0" type="text" name="pa_sulphide">
						</div>
					</div>
					<p class="equipment-selection__description equipment-selection__description_no-result">
						Неудача! К сожалению мы не смогли подобрать систему на основе ваших показателей. :(
						Вы можете <a href="<?php echo SITE_URL?>" class="equipment-selection__link">связаться со специалистом<a>, чтобы найти другой способ решения.
					</p>
					
					<section class="results">
						<div class="results__container"></div>
						<!-- <button class="equipment-selection__calculate-button results__add-to-cart-button">Добавить все в корзину</button> -->
					</section>
				</div>
			</div>
			 <!-- If we need pagination -->
			 <div class="swiper-pagination equipment-selection__pagination"></div>
		</div>	
		<p class="equipment-selection__description equipment-selection__description_no-result">
		Неудача! К сожалению мы не смогли подобрать систему на основе ваших показателей. :(
		Вы можете <a href="<?php echo SITE_URL?>" class="equipment-selection__link">связаться со специалистом<a>, чтобы найти другой способ решения.
		</p>
		<section class="results_phone">
		<?php 
			//  echo do_shortcode('[products]');
			 get_template_part('inc/get_samle_products.php');
		?>
		</section>
		<?php
			  get_template_part('template-parts/footer/footer-smart-phone-templates/footer-water-analysis-smart-phone');
		?>	
	</section>
	<section class="for-dekstop">
		<h1 class="title title_about-company">Подбор оборудования</h1>
		<p class="description">
			<span class="description__insert">
				Если вы уже сделали анализ воды, можете ввести данные и калькулятор
				подберет вам индивидуально оборудование под ваши требования.
			</span>
			</p>
			<section class="equipment-selection">
			<h3 class="sub-title">Калькулятор системы водоподготовки</h3>
			<form class="equipment-selection__form" name="equipmentSelection">
				<div class="equipment-selection__choice">
					<div class="equipment-selection__choice-col">
						<h4 class="description">Источник воды:</h4>
						<div class="equipment-selection__choice-item">
							<input class="equipment-selection__choice-radio" value="1" type="radio" checked name="water_source" id="water_source_one">
							<label class="equipment-selection__choice-color" for="water_source_one">Водопровод</label>
						</div>
						<div class="equipment-selection__choice-item">
							<input  class="equipment-selection__choice-radio" value="2" type="radio" name="water_source" id="water_source_two">
							<label class="equipment-selection__choice-color" for="water_source_two">Скважина</label>
						</div>
						<div class="equipment-selection__choice-item">
							<input  class="equipment-selection__choice-radio" value="3" type="radio" name="water_source" id="water_source_three">
							<label class="equipment-selection__choice-color" for="water_source_three">Колодец</label>
						</div>
					</div>
					<div class="equipment-selection__choice-col">
						<h4 class="description">Какая сейчас вода?</h4>
						<div class="equipment-selection__choice-item">
							<input class="equipment-selection__choice-radio" value="1" type="radio" checked name="pa_clear_turbidity" id="pa_clear_turbidity_one">
							<label class="equipment-selection__choice-color" for="pa_clear_turbidity_one">Прозрачная</label>
						</div>
						<div class="equipment-selection__choice-item">
							<input  class="equipment-selection__choice-radio" value="2" type="radio" name="pa_clear_turbidity" id="pa_clear_turbidity_two">
							<label class="equipment-selection__choice-color" for="pa_clear_turbidity_two">Мутная</label>
						</div>
					</div>
					<div class="equipment-selection__choice-col">
						<h4 class="description">Какая нужна вода?</h4>
						<div class="equipment-selection__choice-item">
							<input class="equipment-selection__choice-radio" value="1" type="radio" checked name="choiceTaste" id="choiceTaste_one">
							<label class="equipment-selection__choice-color" for="choiceTaste_one">Питьевая</label>
						</div>
					<div class="equipment-selection__choice-item">
						<input  class="equipment-selection__choice-radio" value="2" type="radio" name="choiceTaste" id="choiceTaste_two">
						<label class="equipment-selection__choice-color" for="choiceTaste_two">Техническая</label>
					</div>
			
				<div class="equipment-selection__choice-col">
					<h4 class="description">Точки водоразбора?</h4>
					<input  class="equipment-selection__point-water" type="range" value="7" min="1" max="7" step="1" name="pa_water_points">
					<label class="equipment-selection__choice-color equipment-selection__choice-color_water-points" for="pa_water_points">От 1 до 7 точек</label>
				</div>
			</div>
			<table class="equipment-selection__table">
				<thead>
					<tr class="equipment-selection__choice-item">
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem"  for="pa_ph">Реакция среды pH</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_ph">
						</td>
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_oxidability">Окисляемость</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_oxidability">
						</td>
					</tr>
					<tr class="equipment-selection__choice-item">
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_tds">Минерализация</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_tds">
						</td>
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_mn">Марганец</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_mn">
						</td>
					</tr>
					<tr class="equipment-selection__choice-item">
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_tdh">Жесткость</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_tdh">
						</td>
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_ftor">Фториды</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_ftor">
						</td>
					</tr>
					<tr class="equipment-selection__choice-item">
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_ferrum">Железо</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_ferrum">
						</td>
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_h2s">Сероводород</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_h2s">
						</td>
					</tr>
					<tr class="equipment-selection__choice-item">
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_nitrate">Нитраты</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_nitrate">
						</td>
						<td class="equipment-selection__td">
							<label class="equipment-selection__elem" for="pa_sulphide">Сульфиды</label>
							<input class="equipment-selection__elem-value" placeholder="Введите значение..." type="text" name="pa_sulphide">
						</td>
					</tr>
				</thead>
			</table>
			<div class="equipment-selection__info">
				<div class="equipment-selection__info-pointer"></div>
				<p class="equipment-selection__description">
						Введите данные полученные с помощью нашего <a href="<?php echo SITE_URL?>water-analysis" class="equipment-selection__link">анализа воды</a> или из другой лаборатории.
				</p>
			</div>
			<button class="equipment-selection__calculate-button" disabled>Рассчитать</button>
		</form>
		<p class="equipment-selection__description equipment-selection__description_no-result">
			Неудача! К сожалению мы не смогли подобрать систему на основе ваших показателей. :(
			Вы можете <a href="<?php echo SITE_URL?>" class="equipment-selection__link">связаться со специалистом<a>, чтобы найти другой способ решения.
		</p>
		</section>
		<section class="results">
	<div class="results__container"></div>
	<button class="equipment-selection__calculate-button results__add-to-cart-button">Добавить все в корзину</button></section></section>
</section>
</main>
<?php
get_footer();
  $table= get_postdata( 1419 );
  echo $table['Content'];
?>
<script>
// Инициализация глобальных переменных для JS
	window.obj = {};
	window.drinkSystems = [];
	window.systems = [];
	window.filterCases = [];
	window.filters = [];
</script>
<?php
		// системы для питьевой воды
		$drink_water_filters_ids = array( 554 );
		$drink_water_filters_count = count($drink_water_filters_ids);
		// корпус пре(пост)фильтра ids
		$filter_cases_ids = array( 543 );
		$filter_cases_ids_count = count($filter_cases_ids);
		// массив фильтров ids
		$filters_ids = array( 884, 880 );
		$filters_ids_count = count($filters_ids);
		// массив ids оборудования для расчета
		$systems_ids = array( 529, 530, 531 , 532, 727, 534, 536, 537, 535);
		$systems_ids_count = count($systems_ids);
		// получаем все системы питьевых фильтров
		for($i = 0; $i < $drink_water_filters_count; ++$i) {
			$drink_water_filters[$i][0] = wc_get_product($drink_water_filters_ids[$i]);
			$drink_water_filters[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($drink_water_filters_ids[$i]), 'thumbnail' );
			?>
				<script>
					// Собираем данные для JS
					window.obj = {};
					window.obj.product = <?php echo $drink_water_filters[$i][0];?>;
					window.obj.urlPic = <?php echo json_encode($drink_water_filters[$i][1]);?>;
					window.drinkSystems.push(window.obj);
			</script>
			<?php
		};
		// получаем все объекты фильтров и их изображения
		for($i = 0; $i < $filter_cases_ids_count; ++$i) {
			$filter_cases[$i][0] = wc_get_product($filter_cases_ids[$i]);
			$filter_cases[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($filter_cases_ids[$i]), 'thumbnail' );
			?>
				<script>
					// Собираем данные для JS
					window.obj = {};
					window.obj.product = <?php echo $filter_cases[$i][0];?>;
					window.obj.urlPic = <?php echo json_encode($filter_cases[$i][1]);?>;
					window.filterCases.push(window.obj);
			</script>
			<?php
		};
		// получаем все объекты корпусов фильтров и их изображения
		for($i = 0; $i < $filters_ids_count; ++$i) {
			$filters[$i][0] = wc_get_product($filters_ids[$i]);
			$filters[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($filters_ids[$i]), 'thumbnail' );
			?>
				<script>
					// Собираем данные для JS
					window.obj = {};
					window.obj.product = <?php echo $filters[$i][0];?>;
					window.obj.urlPic = <?php echo json_encode($filters[$i][1]);?>;
					window.filters.push(window.obj);
				</script>
			<?php
		};
		for($i = 0; $i < $systems_ids_count; ++$i) {
			// товар(product) ячейка [0]
			$systems[$i][0] = wc_get_product($systems_ids[$i]);
			// получаем ключи всех атрибутов, что затем получить их таксономию(значения)
				$attributes_keys = array_keys($systems[$i][0]->attributes);
				for($j = 0; $j < count($attributes_keys); ++$j) {
					$systems[$i][1][$j] = wc_get_product_terms( $systems_ids[$i] , $attributes_keys[$j]);
					// ячейка 2 - название атрибута, 3-4 - мин/макс значения атрибута
					$systems[$i][1][$j][] = $attributes_keys[$j];
					// ячейка 3-4 - мин/макс значения атрибута
					$systems[$i][1][$j][]=$systems[$i][1][$j][0]->name;
					$systems[$i][1][$j][]=$systems[$i][1][$j][1]->name;
				};
			//  изображение товара ячейка [][2]
			$systems[$i][2] = wp_get_attachment_url( get_post_thumbnail_id($systems_ids[$i]), 'thumbnail' );
			?>
			<script>
				// Собираем данные для JS
				window.obj = {};
				window.obj.product = <?php echo $systems[$i][0];?>;
				window.obj.attributes = <?php echo json_encode($systems[$i][1]);?>;
				window.obj.urlPic = <?php echo json_encode($systems[$i][2]);?>;
				window.systems.push(window.obj);
			</script>
			<?php
		}
		// echo "<pre>"; print_r($systems[0][0]); echo "</pre>";
 ?>
<?php
get_footer();
?>
