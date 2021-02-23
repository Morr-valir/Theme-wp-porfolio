<?php get_header('front'); ?>
    <div id="blog-projet" class="column container">
            <!-- Affichage de la sidebar -->
    <aside class="column is-12-mobile is-12-tablet is-8-desktop recherche">
    <?php dynamic_sidebar('menu-widget') ?>
    </aside>
        <!-- Affichage des articles -->
        <section class="columns ">
        <div id="blog-fluid" class="container is-fluid">
	        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		        <!--STRUCTURE ARTICLE-->
          <article class="column is-4">
            <div class="card large">
            <div class="card-image">
              <figure class="image is-256"><?php the_post_thumbnail(); ?></figure>
          </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content"><p class="title is-4 no-padding"><?php the_title(); ?></p>
            <p class="subtitle is-6">Auteur : <?php the_author(); ?></p></div></div>
          <div class="content">
              <?php the_excerpt(); ?>
          </div>
            <a class="button btn2" href="<?php the_permalink() ?>">Voir projet</a>
          </div>
        </div>
        </article>
            <?php endwhile; endif; ?>
            <?php the_posts_pagination(); ?>
            </div>
        </section>
</div>
<!--ESPACE TELECHARGEMENT CV-->
<section class="column is-full telechargement">
            <div class="container flex-dl">
                <h2 class="titlesection">Consulter mon CV</h2>
                <div style="width: 100%;margin-bottom: 25px;"></div>
                <a class="button btn1" href="" title="CV">Télécharger mon CV</a>
            </div>
</section> 

        
<?php get_footer(); ?>