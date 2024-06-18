<?php

// Get testimonial fields
$quote = get_field('quote');
$author = get_field('author');
$image = get_field('image');

?>

<div class="testimonial bg-indigo-600 border-l-8 border-l-teal-300 text-indigo-50 not-prose p-12">
    <blockquote class="text-inherit text-2xl font-medium mb-4">
        <?php echo esc_html($quote); ?>
    </blockquote>
    <cite class="font-normal"><?php echo esc_html($author); ?></cite>
    <img src="<?php echo $image; ?>" alt="">
</div>