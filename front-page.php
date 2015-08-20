<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <div class="container-fluid container-eq-height">
  	<div class="row-fluid row-eq-height">
			<div class="col-xs-12 col-sm-6" style="background-color:yellow;"><?php the_field( 'intro' ) ?></div>
			<div class="col-xs-12 col-sm-6" style="background-color:magenta"> <h2>FAQ</h2>
			
			<?php 
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'			=> 'faq'
				));

				if( $posts ): ?>
	
					<ul>
		
					<?php foreach( $posts as $post ): 
		
						setup_postdata( $post )
		
						?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
	
					<?php endforeach; ?>
	
					</ul>
	
					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
				</div>
		</div>
	</div>
		
		<div class="row-fluid row-eq-height">
			<div class="col-sm-12" style="background-color:grey;"><?php the_field( 'intro' ) ?></div>
			
		</div>
<?php endwhile; ?>
