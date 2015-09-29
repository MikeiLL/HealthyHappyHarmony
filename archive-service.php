<?php get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php
$args = array( 'post_type' => 'service', 'paged' => $paged );
$hwr_loop = new WP_Query( $args );
?>
  <?php $my_anchor = 1; ?>
	<?php while ($hwr_loop->have_posts()) : $hwr_loop->the_post(); ?>
		<?php get_template_part('templates/content', get_post_type() != 'service' ? get_post_type() : get_post_format()); ?>
		<a name="<?=$my_anchor?>">
		<?php $my_anchor += 1 ?>
	<?php endwhile; ?>
<?php the_posts_navigation(); ?>
