<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/media/logo-V3_picto.png">
     <?php wp_head(); ?>
    <!--IMPORT DE POLICE-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,100;1,300;1,700&display=swap" rel="stylesheet">
    <!-- CSS BULMA-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bulma/css/bulma.min" >
    <!-- CSS CUSTOM-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css_custom/style_custom.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css_custom/fontawesome/css/all.css" >
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open() ?>
        <!--Header du site-->
        <header>
        <div class="container">
            <nav class="nav navbar has-shadows">
                <!--LOGO-->
                <div class="navbar-brand">
                    <a href="#" class="navbar-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/logo-blanc.png" alt="logo MDS">
                    </a>
                </div>
                <!--MENU BURGER-->
                <a href="#" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <!--MENU-->
            <div class="navbar-menu" id="navMenu">
                <div class="navbar-end">
                <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                </div>
            </div>
            </nav>
        </div>
        <!--BANNER SITE-->
        <section class="hero is-medium is-primary is-bold bandeau">
			<div class="hero-body">
    			<div class="container info-header">
    				<h1 class="title"><?php the_title(); ?></h1>
    				<span class="subtitle">PICARD Matthieu</span>
    			</div>
			</div>
		</section> 
    </header>
    <main>