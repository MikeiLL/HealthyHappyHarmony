<header class="banner" role="banner">
	<?php if(is_front_page()) : ?>
		<div class="greeting">
    <div class="container-full">
  <?php else: ?>
    <div class="container-head">
	<?php endif ?>

    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Hamilton Wellness Resources</a>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-collapse']);
      endif;
      ?>
    </nav>
      <?php if(is_front_page()) : ?>
			<div class="center-block free_consultation">
				<a href="initial-consultation" class="btn btn-primary btn-lg outline">Free Consultation</a>
			</div>
		</div>
		<div class="center-block tagline"><?php echo get_bloginfo ( 'description' ); ?></div>
	<?php endif ?>
  </div> <!-- end container -->

</header>
<?php if ( !is_front_page() && !is_home() && function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">','</p>');
} ?>
