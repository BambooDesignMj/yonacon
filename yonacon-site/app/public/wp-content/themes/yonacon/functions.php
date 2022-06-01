<?php
function add_stylesheet()
{
  if (is_front_page()) {
    wp_enqueue_style('front_page', get_template_directory_uri() . '/css/index.css', array(), '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'add_stylesheet');
  // wp_enqueue_scriptsフックにadd_stylesheet関数を登録