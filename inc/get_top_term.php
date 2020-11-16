<?php
function get_top_term( $taxonomy, $post_id = 0 ){
	if( isset($post_id->ID) ) $post_id = $post_id->ID;
	if( ! $post_id )          $post_id = get_the_ID();

	$terms = get_the_terms( $post_id, $taxonomy );

	if( ! $terms || is_wp_error($terms) )
		return $terms;

	// только первый
	$term = array_shift( $terms );

	// найдем ТОП
	$parent_id = $term->parent;
	while( $parent_id ){
		$term = get_term_by( 'id', $parent_id, $term->taxonomy );
		$parent_id = $term->parent;
	}

	return $term;
}
?>
