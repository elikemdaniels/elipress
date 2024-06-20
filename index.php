<?php get_header(); ?>

<!-- WordPress Loop -->
<?php if (have_posts()) : ?>
  <section class="py-24">
    <div class="content-wrapper grid md:grid-cols-2 gap-8">
      <?php while (have_posts()) : the_post(); ?>
        <article class="bg-white rounded-lg flex flex-col gap-4 p-8">
          <h3 class="text-2xl font-semibold leading-normal">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <time class="text-sm text-slate-500" datetime="<?php the_date(); ?>"><?php echo get_the_date(); ?></time>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'watu'); ?></p>
    </div>
  </section>
<?php endif; ?>

<!-- footer -->
<?php get_footer(); ?>