<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-indigo-100 text-slate-900 antialiased'); ?>>
  <?php wp_body_open(); ?>
  <div class="site-wrapper flex flex-col min-h-screen">
    <a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'elipress'); ?></a>
    <?php get_template_part('template-parts/part-header'); ?>
    <main id="content" class="flex-grow flex items-center justify-center">