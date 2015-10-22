<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
  <!-- row for wells -->
		<div class="row col-wrap">
			<?php get_template_part('templates/front-page/services'); ?>
			<?php get_template_part('templates/front-page/contact'); ?>
			<?php get_template_part('templates/front-page/faq'); ?>
		</div><!-- /.row col-wrap first row-->
		
		<div class="row col-wrap">
				<?php get_template_part('templates/front-page/articles'); ?>		
		</div><!-- /.row col-wrap second row -->

<?php endwhile; ?>
