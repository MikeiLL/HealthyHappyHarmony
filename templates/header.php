<header class="banner" role="banner">
	<?php if(is_front_page()) : ?>
		<div class="greeting">
	<?php endif ?>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-collapse']);
      endif;
      ?>
    </nav>

  <div class="container-full">
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Hamilton Wellness Resources</a>
      <?php if(is_front_page()) : ?>
			<div class="center-block free_consultation">
				<button class="btn btn-primary btn-lg outline" type="button">Free Consultation</button>
			</div>
		</div>
		<div class="center-block tagline"><?php echo get_bloginfo ( 'description' ); ?></div>
	<?php endif ?>
  </div> <! -- end container -->

</header>
<?php if ( !is_front_page() && !is_home() && function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">','</p>');
} ?>
