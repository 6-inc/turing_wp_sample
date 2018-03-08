<div class="bg-faded p-4 my-4">
  <!-- Image Carousel -->
  <div class="flexslider">
    <ul class="slides">
      <?php
      $args = array(
        'post_type' => array('slider'),
        'posts_per_page' => 3,
      );
      $slider = new WP_Query( $args );
      if( $slider->have_posts() ): ?>
        <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
        <?php $slider_link = get_post_meta(get_the_ID(), 'standard_link_url_field', true); ?>
          <li>
            <a href="<?php echo $slider_link; ?>">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail();
            }else {
              echo '<img src="'.get_template_directory_uri().'/dist/images/thumbnail.jpg" alt="">';
            }
            ?>
            <p class="flex-caption"><?php the_title(); ?></p>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
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