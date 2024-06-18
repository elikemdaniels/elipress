<?php

function elipress_editor_assets()
{
  // Enqueue frontend styles
  wp_enqueue_style('elipress-frontend-style', get_template_directory_uri() . '/build/index.css');

  // Enqueue frontend styles
  wp_enqueue_script('elipress-frontend-script', get_template_directory_uri() . '/build/index.js', [], null, true);

  // Enqueue Alpine.js
  wp_enqueue_script('alpine', get_template_directory_uri() . '/build/js/alpine.js', [], null, true);

  // Enqueue GSAP
  wp_enqueue_script('gsap', get_template_directory_uri() . '/build/js/gsap.js', [], null, true);

  // Enqueue SwiperJS
  wp_enqueue_script('swiper', get_template_directory_uri() . '/build/js/swiper.js', [], null, true);
}
add_action('enqueue_block_editor_assets', 'elipress_editor_assets');
