<div class="col-sm-6 col">
				<div class="well">
				<h2>FAQ</h2>
			
					<?php 
					
						$posts = get_posts(array(
							'posts_per_page'	=> -1,
							'post_type'			=> 'faq',
							'orderby'				=> 'title', 
							'order' 				=> 'ASC'
						));

						if( $posts ): ?>
	
							<dl class="dl-horizontal">
		
							<?php foreach( $posts as $post ): 
		
								setup_postdata( $post )
		
								?>
								<dt>
									<?php the_title(); ?>
								</dt>
								
								<dd>
									<?php the_content(); ?>
								</dd>
	
							<?php endforeach; ?>
	
							</dl>
	
							<?php wp_reset_postdata(); ?>
							
							<div class="list-group">
									
							<?php foreach( $posts as $post ): 
		
								setup_postdata( $post )
		
								?>

							<a href="#" class="list-group-item">

									<h4 class="list-group-item-heading"><?php the_title(); ?></h4>

									<p class="list-group-item-text"><?php the_content(); ?></p>

							</a>
							
							<?php endforeach; ?>
							
							</div> <!-- End list-group -->
	
							<?php wp_reset_postdata(); ?>

						<?php endif; ?>
				</div>
			</div><!-- end span 6-->