<?php
function  get_product_images_urls($product){
  $urls = array();
  $image_galery_ids = $product->get_gallery_attachment_ids();
  $image_id = $product->get_image_id();
  if ($image_id) array_push($urls, wp_get_attachment_url($image_id));
  if ($image_galery_ids) {
    for($i = 0; $i < count($image_galery_ids); ++$i) {
      array_push($urls, wp_get_attachment_url($image_galery_ids[$i]));
    }
  }
  return $urls;
}
?>