<?php
  global $product;
  $product_id = $product->id;
  $product_img =  wp_get_attachment_url( get_post_thumbnail_id($product_id), 'thumbnail' );
  $product_title = $product->get_title();
  $product_price = $product->get_price_html();
  $product_description = $product->get_description();
  $product_attributes_keys = array_keys($product->attributes);
  for($j = 0; $j < count($product_attributes_keys); ++$j) {
    //$product_attributes[$j] = wc_get_product_terms( $product_id , $product_attributes_keys[$j]);
    $product_attributes[$j]["title"] =  wc_attribute_label($product_attributes_keys[$j]);
    $product_attributes[$j]["value"] =  $product->get_attribute($product_attributes_keys[$j]);
  };
// echo "<pre>"; print_r(   $product_attributes ); echo "</pre>";

$categories = get_terms( $product_id , [
    'parent'    => 0, // only top level categories
    'taxonomy'  => 'product_cat',
    'fields'    => 'names'
] );
echo "<pre>"; print_r( $categories ); echo "</pre>";?>