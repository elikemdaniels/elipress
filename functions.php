<?php

// Include the frontend enqueue functions
require_once get_template_directory() . '/inc/enqueue-frontend.php';

// Include the editor enqueue functions
require_once get_template_directory() . '/inc/enqueue-editor.php';

// Add theme support functions
require_once get_template_directory() . '/inc/theme-support.php';

// Disable jQuery on the frontend
require_once get_template_directory() . '/inc/jquery-support.php';

// Register blocks
function watu_register_acf_blocks()
{
  register_block_type(__DIR__ . '/blocks/testimonial');
}
add_action('init', 'watu_register_acf_blocks');
