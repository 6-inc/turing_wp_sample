<header class="banner">
  <div class="">
    <a class="brand display-3 text-center text-heading text-shadow text-white mt-5 d-block" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <p class="lead text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</p>
    <nav class="nav-primary navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
