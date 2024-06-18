<?php get_header(); ?>

<!-- WordPress Loop -->
<?php if (have_posts()) : ?>
  <section class="py-24">
    <div class="content-wrapper">
      <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <h1 class="text-4xl font-bold leading-normal"><?php the_title(); ?></h1>
          <div class="prose prose-lg mx-auto max-w-[100%]">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>

<!-- footer -->
<?php get_footer(); ?>