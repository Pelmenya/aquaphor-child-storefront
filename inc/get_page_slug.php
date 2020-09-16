<?php
 function get_page_slug(){
  global $post;
  return $post->post_name;
 }
?>