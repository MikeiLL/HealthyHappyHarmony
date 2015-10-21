<?php 
use Roots\Sage\Extras; 
?>
		<div class="col-sm-4 col">
				<div class="well">
				<a href="Service/"><span class="featured_items glyphicon glyphicon-record featured_item_icons text-center"></span></a>
				<div class="no_color">
					<a href="Service/"><h2 class="front-page-heading text-center">Services</h2></a>
				</div>
			
					<?php 
					
						$posts = get_posts(array(
							'posts_per_page'	=> -1,
							'post_type'			=> 'service',
							'orderby'				=> 'date', 
							'order' 				=> 'DESC'
						));

						if( $posts ): ?>
							
							<div class="list-group">
	
							<?php foreach( $posts as $post ): 
		
								setup_postdata( $post );
		
								?>

							<a href="Service#<?php echo Extras\formatUrl(get_the_title(), '-'); ?>" class="list-group-item">

									<h4 class="list-group-item-heading"><?php the_title(); ?></h4>

							</a>
							
							<?php endforeach; ?>
							</div> <!-- End list-group -->
	
							<?php wp_reset_postdata(); ?>

						<?php endif; ?>
				</div>
			</div><!-- end span 6-->
