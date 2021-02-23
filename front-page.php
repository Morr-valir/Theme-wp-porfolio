<?php  get_header('front'); ?>
    <!--PRESENTATION-->
<section class="column presentation">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <div class="container flex-dl">
                    <img class="img1" src="<?php echo get_template_directory_uri(); ?>/media/quote.svg" alt="bouble quote">
                    <?php the_content(); ?>
                    <img class="img2" src="<?php echo get_template_directory_uri(); ?>/media/quote.svg" alt="bouble quote">
                <a class="button btn1" href="<?php the_permalink(312); ?>" title="linkpropos">Mon parcours</a>
            </div>
<?php endwhile; endif; ?>
    </section>
<!--Domain de compétence-->
<section class="section competence">
    <div class="container has-text-centered py-4">
        <h2 class="title">Mes compétences</h2>
        <hr>
        <p class="text-competence">
            En tant que Designer Web, il est important de savoir maîtriser plusieurs aspects du domaine du web. Voici mes principales compétences que je maîtrise dans ce domaine.
        </p>
        <div class="columns">
            <div data-aos="fade-right" class="column is-6 img-competence">
            <img class="img-compte" src="<?php echo get_template_directory_uri(); ?>/media/visuel-interface-mobile.svg" alt="visuel interface mobile">
            </div>
            <div class="column is-6 column-competence">
                <div data-aos="fade-left" data-aos-duration="2000" class="box-competence">
                    <h3 class="title is-5">Design responsive</h3>
                    <p class="subtitle is-6">
                        Le Responsive Web design est une approche de conception Web qui vise à l'élaboration de sites offrant une expérience de lecture et de navigation optimales pour l'utilisateur.
                        Qui me semble être l'un des point le plus important selon moi dans Domaine du Web.
                    </p>
                </div>
                <div data-aos="fade-left" data-aos-duration="2250" class="box-competence">
                    <h3 class="title is-5">Création de visuel</h3>
                    <p class="subtitle is-6">
                        La création numérique, est un point clé de la communication dites digital, que ce soit la réalisation de maquette graphique, flyer, affiche print ou Web, ainsi que
                        l'identité digitale.
                    </p>
                </div>
                <div data-aos="fade-left" data-aos-duration="2500" class="box-competence">
                    <h3 class="title is-5">Analyse de performance</h3>
                    <p class="subtitle is-6">
                        La Performance Digitale répond au besoin des entreprises d'optimiser leurs écosystèmes digitaux, de l'audience jusqu'à sa fidélisation à des fins commerciales
                        ou d'expérience utilisateur. grâce aux multiple d'analyse de performance et d'SEO.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
         <!--ESPACE PROJET / BLOG-->
        <section class=" column is-full blog">
          <div class="container is-fluid">
            <div class="container">
                <h2 class="titlesection">Mes derniers projets</h2>
                <hr>
                <div class="columns is-multiline" data-config-id="posts_01">
<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=3');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
        <!---->
        <article data-aos="zoom-in" class="column is-12 is-4-desktop">
          <div class="card" style="height: 100%">
            <div class="card-image"><?php the_post_thumbnail(); ?></div>
            <div class="card-content">
              <span class="is-size-7">Auteur : <?php the_author(); ?></span>
              <h5 class="title is-5"><a href="#"><?php the_title(); ?></a></h5>
              <a class="button is-primary" href="<?php the_permalink() ?>">Lire plus..</a>
            </div>
          </div>
        </article>
<?php endwhile; ?>
                </div>
                <a class="button btn2" href="<?php the_permalink(311); ?>" title="linkprojet">Consulter mes réalisations</a>
            </div>
            </div>
</section>
<!--ESPACE TELECHARGEMENT CV-->
<section class=" column is-full telechargement">
            <div class="container flex-dl has-text-centered">
                <h2 class="titlesection">Consulter mon CV</h2>
                <a class="button btn1" href="" title="CV">Télécharger mon CV</a>
            </div>
</section>     
<?php get_footer(); ?>
