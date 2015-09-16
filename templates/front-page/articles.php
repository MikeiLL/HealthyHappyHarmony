			<h2 class="text-center"> Recent Articles</h2>
		
				<?php 
				
						$args = array(
			'posts_per_page' => 3,
			'meta_key' => '_featured-post',
			'meta_value' => 1
			);
			$featured = new WP_Query($args);

			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<div class="col-sm-4 col">
					<div class="well">
				<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
				<?php if (has_post_thumbnail()) : ?>
					<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb', array( 'class'	=> "img-responsive img-center")); ?></a> </figure>
				<?php endif; ?>
				<p ><?php echo the_excerpt();?></p>
				</div>
			</div>
			<?php endwhile; else:
			endif;
			?>

		</div><!-- end span 6-->