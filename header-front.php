<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo get_template_directory_uri();?>/media/logo-V3_picto.png">
        <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php wp_head(); ?>
        <!--IMPORT DE POLICE-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,100;1,300;1,700&display=swap" rel="stylesheet">
        <!-- CSS BULMA-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bulma/css/bulma.min" >
        <!-- ANIMATION-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- CSS CUSTOM-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css_custom/style_custom.css" >
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css_custom/fontawesome/css/all.css" >
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open() ?>
		<!--APP VUEJS-->
		<div id='app'>
        <!--Header du site-->
        <header id="FRONT" class="hero is-medium is-bold">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item nav-logo" href="../">
                                <img src="<?php echo get_template_directory_uri(); ?>/media/logo-gris.png" alt="logo MDS">
                            </a>
                            <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <div id="navbarMenu" class="navbar-menu">
                            <div class="navbar-end">
                                <div class="tabs is-right">
                                    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="hero-body">
                <div class="container has-text-centered info-header">
                    <h1 class="title is-1"><?php the_title(); ?> </h1>
                </div>
            </div>
        </header>
        <main>
