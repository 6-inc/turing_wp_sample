<div class="bg-faded p-4 my-4">
    <!-- Image Carousel -->
    <div class="flexslider">
      <ul class="slides">
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/slide-1.jpg" />
          <p class="flex-caption">Adventurer Cheesecake Brownie</p>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/slide-2.jpg" />
          <p class="flex-caption">Adventurer Lemon</p>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/slide-3.jpg" />
          <p class="flex-caption">Adventurer Donut</p>
        </li>
      </ul>
    </div>
</div>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>