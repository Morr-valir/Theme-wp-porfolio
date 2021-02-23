<?php 
//ajouts des fichier CSS
/* fonctions ajouter feuille css perso page login et login password-protected */
function css_login_perso() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css_custom/login.css' );
}
add_action( 'login_enqueue_scripts', 'css_login_perso' );

/*function matthds_CSS() { 
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
    'matthds', get_template_directory_uri() . '/css/styles.css',
    );
    wp_enqueue_style( 
    'matthds', get_template_directory_uri() . '/css/fontawesome/css/all.css',
    );
};
    add_action( 'wp_enqueue_scripts', 'matthds_CSS' );*/
//-------------------------------------------------------------------
//-------------------------------------------------------------------
// Création des custom post type porfolio
function matthds_register_post_types() {
    // La déclaration de nos Custom Post Types et Taxonomies ira ici
        // CPT Portfolio
        $labels = array(
            'name' => 'Portfolio',
            'all_items' => 'Tous les projets',  // affiché dans le sous menu
            'singular_name' => 'Projet',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Modifier le projet',
            'menu_name' => 'Portfolio'
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor','thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
        );
    
        register_post_type( 'portfolio', $args );
};
add_action( 'init', 'matthds_register_post_types' );
//-------------------------------------------------------------------
// Gestion des fonctions du thème
    function matthds_add_support() {

        // Ajoute de la fonction de modification du header
        $header_info = array(
            'width'         => 1905,
            'default-image' => get_template_directory_uri() . '/media/Bandeau.png',
            'height'        => 540,
        );
        add_theme_support( 'custom-header', $header_info );

        // Ajout de la fonction de modification background & couleur
        $background = array(
            'default-color' => '#303841',
        );
        add_theme_support( 'custom-background', $background );

        // Ajouter la prise en charge des images mises en avant
        add_theme_support( 'post-thumbnails' );

        // Ajouter automatiquement le titre du site dans l'en-tête du site
        add_theme_support( 'title-tag' );

        // Définir la taille des images mises en avant
        set_post_thumbnail_size( 256, 256, true );
        // Alignement large et pleine page
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-color-palette',
            array(
		        array( 'name' => 'blue', 'slug'  => 'blue', 'color' => '#48ADD8' ),
		        array( 'name' => 'pink', 'slug'  => 'pink', 'color' => '#FF2952' ),
		        array( 'name' => 'green', 'slug'  => 'green', 'color' => '#83BD71' ),
                ));
        add_theme_support( 'disable-custom-colors' );
        // Autoriser les embeds Responsives
        add_theme_support( 'responsive-embeds' );
        }
    add_action( 'after_setup_theme', 'matthds_add_support' );
//-------------------------------------------------------------------

//-------------------------------------------------------------------
// Création d'emplacement et menu
register_nav_menus( array(
	'main' => 'Menu Principal',
    'footer' => 'Bas de page',
    'container' => 'ul', // afin d'éviter d'avoir une div autour 
) );

// Création d'une sidebar article
register_sidebar( array(
	'id' => 'blog-sidebar',
    'name' => 'Blog',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title h5">',
    'after_title'   => '</h2>',
) );
// Création menu widget article
register_sidebar( array(
	'id' => 'menu-widget',
    'name' => 'menu widget',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title h5">',
    'after_title'   => '</h2>',
) );
// Gestion des widgets

