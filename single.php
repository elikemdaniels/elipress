<?php get_header(); ?>

<!-- WordPress Loop -->
<?php if (have_posts()) : ?>
  <section class="py-24">
    <div class="content-wrapper flex flex-col gap-10">
      <?php while (have_posts()) : the_post(); ?>
        <article class="bg-white rounded-lg flex flex-col gap-8 p-8">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          <?php endif; ?>
          <h1 class="text-4xl font-bold leading-normal"><?php the_title(); ?></h1>
          <div class="prose prose-lg max-w-full">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  </section>
<?php else : ?>
  <section>
    <div class="content-wrapper py-20">
      <article>
        <h1>No posts to display.</h1>
      </article>
    </div>
  </section>
<?php endif; ?>

<!-- footer -->
<?php get_footer(); ?>