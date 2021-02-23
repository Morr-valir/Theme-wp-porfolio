<?php
/*
  Template Name: A propo
*/
	get_header('front');
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
		<section class="column is-full">
		<?php the_content(); ?>
		</section>
		<!--ESPACE TELECHARGEMENT CV-->
		<section class="column telechargement">
            <div class="container flex-dl has-text-centered">
                <h2 class="titlesection">Consulter mon CV</h2>
                <div style="width: 100%;margin-bottom: 25px;"></div>
                <a class="button btn1" href="" title="CV">Télécharger mon CV</a>
            </div>
		</section> 
<?php endwhile; endif;?>
<?php get_footer(); ?>
