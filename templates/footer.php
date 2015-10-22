<?php use Roots\Sage\Extras; ?>

<footer class="content-info" role="contentinfo">
  <div class="container">
  	<h3 class="secondary-tagline">Healthy &bull; Happy &bull; Harmony</h3>
  	<div id="share"></div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <?php Extras\bns_dynamic_copyright( 'start=Copyright&end=All Rights Reserved.' ); ?>
</footer>
