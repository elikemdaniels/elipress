<?php

function elipress_disable_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'elipress_disable_jquery');
