		<div class="col-sm-4 col">
				<div class="well">
				<a href="contact/"><span class="featured_items glyphicon glyphicon-record featured_item_icons text-center"></span></a>
				<div class="no_color">
					<a href="contact/"><h2 class="front-page-heading text-center">Contact</h2></a>
				</div>
			
					<?php 
						$the_slug = 'contact-mini';
						$posts = get_posts(array(
							'posts_per_page'	=> 1,
							'post_type'			=> 'page',
							'name'				=> $the_slug, 
							'order' 				=> 'ASC'
						));

						if( $posts ): ?>
	
							<?php foreach( $posts as $post ): 
		
								setup_postdata( $post )
		
								?>
								
								<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
															<a href="<?php the_permalink(); ?>">
															<?php
															the_post_thumbnail('thumb', array( 'class'	=> "img-responsive img-center"));
														}  ?></a>


									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<p><?php the_excerpt(); ?></p>
									
									

							</a>
							
							<?php endforeach; ?>
								
							<?php wp_reset_postdata(); ?>

						<?php endif; ?>
					</div> <!-- end well -->
			</div><!-- end span 4-->