<?php
/*
  Template Name: mention legales
*/
	get_header('front');
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <div class="container">
    	<?php the_content(); ?>
	</div>
	<?php endwhile; endif;?>
<?php get_footer(); ?>