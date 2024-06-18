<header class="header bg-indigo-600">
    <div class="content-wrapper text-indigo-50 flex justify-between items-center">
        <a class="py-3 font-bold text-lg" href="/"><?php echo esc_html(get_bloginfo('name')); ?></a>
        <?php wp_nav_menu([
            'theme_location' => 'header-primary-menu',
            'container' => 'nav',
            'container_class' => 'header-primary-container',
            'menu_class' => 'header-primary-menu'
        ]); ?>
        <button class="py-3 md:hidden">Menu</button>
    </div>
</header>