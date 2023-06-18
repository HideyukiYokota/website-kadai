<?php if(have_posts()): ?>
  <?php while(have_post()): the_post(); ?>
    <?php if(has_post_thumbnail()): ?>
      <?php the_post_thumbnail('thumbnails'); ?>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/no_image.png" />
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
