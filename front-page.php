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
			<?php get_template_part('templates/front-page/intro'); ?>
			<?php get_template_part('templates/front-page/faq'); ?>
		</div><!-- end row -->
		

		

		<!-- top row of wells or rounded corner divs -->

		<div class="row col-wrap">
			<div class="col-sm-4 col">
				<div class="well full-width-well-dark">
					<p class="lead">Guess what, dear friends?</p>
					<?php the_field( 'intro' ) ?>
				</div>
			</div><!-- end span 4-->
		
			<div class="col-sm-4 col">
				<div class="well">
				<h2>FAQ</h2>
			
					<ul class="list-inline">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
					<p class="visible-xs-block">I see you're using your phone.</p>
					<p class="visible-sm-block">I see you're using your... tablet?</p>
				</div>
			</div><!-- end span 4-->
			
			<div class="col-sm-4 col">
				<div class="well full-width-well-dark">
				<h2>News</h2>
			
					<p class="lead">You'll be thrilled to learn about this</p>
					<p>Brand new thing here.</p>
				</div>
			</div><!-- end span 4-->
			 
		</div><!-- end row -->
		


  	
  	<div class="border-box">
  
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia, lacus nec laoreet interdum, dui sem aliquet leo, a egestas ipsum massa vitae augue. Vestibulum et interdum augue. Phasellus et nisi metus. Donec accumsan quis velit at varius. Suspendisse tincidunt eu orci eget tincidunt. In consectetur tincidunt lectus. Vestibulum mollis, dui a congue pharetra, ligula mauris venenatis nibh, non tincidunt turpis nisl in mi. Nam placerat erat non justo viverra dictum. Donec arcu arcu, interdum et dictum ac, egestas et nibh. Cras tempor, quam sit amet euismod aliquam, erat ex pretium erat, pellentesque dapibus arcu nulla eu tellus. Sed non sapien ultricies, bibendum ipsum vitae, aliquam metus. Morbi interdum ullamcorper turpis at volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse tincidunt dictum nisl ut vehicula.</p>
  
		</div>

<?php endwhile; ?>
