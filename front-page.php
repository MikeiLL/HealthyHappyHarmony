<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>


		<!-- top row of wells or rounded corner divs -->

		<div class="row col-wrap">
			<div class="col-sm-6 col">
				<div class="well">
					<?php the_field( 'intro' ) ?>
				</div>
			</div><!-- end span 6-->
		
			<div class="col-sm-6 col">
				<div class="well">
				<h2>FAQ</h2>
			
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
			</div><!-- end span 6-->
			 
		</div><!-- end row -->
		

		<div class="row base col-wrap">
		<!-- add a second row of wells or rounded corner divs immeadiately underneath-->
		<div class="col-sm-6 col-base"><div class="well"></div></div>
		<div class="col-sm-6 col-base"><div class="well"></div></div>
		</div><!-- close row -->
		

		<!-- top row of wells or rounded corner divs -->

		<div class="row col-wrap">
			<div class="col-sm-6 col">
				<div class="well">
					<?php the_field( 'intro' ) ?>
				</div>
			</div><!-- end span 6-->
		
			<div class="col-sm-6 col">
				<div class="well">
				<h2>FAQ</h2>
			
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
			</div><!-- end span 6-->
			 
		</div><!-- end row -->
		

		<div class="row base col-wrap">
		<!-- add a second row of wells or rounded corner divs immeadiately underneath-->
		<div class="col-sm-6 col-base"><div class="well"></div></div>
		<div class="col-sm-6 col-base"><div class="well"></div></div>
		</div><!-- close row -->
  	
<?php endwhile; ?>
