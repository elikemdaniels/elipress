<?php

function elipress_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
    register_nav_menu('header-primary-menu', 'Header Primary Menu');
    register_nav_menu('header-secondary-menu', 'Header Secondary Menu');
}
add_action('after_setup_theme', 'elipress_support');
