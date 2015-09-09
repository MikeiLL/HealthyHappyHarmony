<?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
<?php get_template_part('templates/content-single', get_post_type()); ?>
