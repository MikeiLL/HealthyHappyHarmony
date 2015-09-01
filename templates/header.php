<header class="banner" role="banner">
	<?php if(is_home() || is_front_page()) : ?>
		<div class="greeting">
	<?php endif ?>
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-collapse']);
      endif;
      ?>
    </nav>
	<?php if(is_home() || is_front_page()) : ?>
			<div class="free_consultation">
				<h2>Our pleasure</h2>
				<p>Is to offer you a 
				<button class="btn btn-primary btn-lg outline" type="button">Free Consultation</button>
			</div>
		</div>
	<?php endif ?>
  </div>

</header>
