<?php get_header('front'); ?>
<div class="container content">
	<div class="container is-fluid">
	        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article id="Article-matthds">
            <section>
            <h2><?php the_title(); ?></h2>
            <time><?php the_time( get_option( 'date_format' ) ); ?> par <?php the_author(); ?></time>
            </section>
            <main>
                	<?php the_content(); ?>
            </main>
        </article>
          <?php endwhile; endif; ?>
          <div class="site__navigation">
	<div class="site__navigation__prev">
		<?php previous_post_link( 'Article Précédent<br>%link' ); ?>
    </div>
    <div class="site__navigation__next">
        <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
    </div>
</div>
</div>
</div>
<?php get_footer(); ?>
