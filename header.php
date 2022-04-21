<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-custom" role="banner">
            <div class=jumbo>
                <p> Guy Lalière - 06 22 86 60 35 </p>
            </div>
            <div class="wrapper">
                <div class="slideshows">
                    <div class="slideshow slideshow--hero">
                        <div class="slides">
                            <div class="slide slide1"></div>
                            <div class="slide slide2"></div>
                            <div class="slide slide3"></div>
                        </div>
                    </div>
                    <div class="slideshow slideshow--contrast slideshow--contrast--before">
                        <div class="slides">
                            <div class="slide slide1"></div>
                            <div class="slide slide2"></div>
                            <div class="slide slide3"></div>
                        </div>
                    </div>
                    <div class="slideshow slideshow--contrast slideshow--contrast--after">
                        <div class="slides">
                            <div class="slide slide1"></div>
                            <div class="slide slide2"></div>
                            <div class="slide slide3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="home-link site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <h1 class="site-title"><?php bloginfo( 'description' ); ?></h1>
            </a>

            <div id="navbar" class="navbar">
                <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                    <button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
                    <a class="screen-reader-text skip-link" href="#content"
                        title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                    <?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'nav-menu',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
                    <?php get_search_form(); ?>
                </nav><!-- #site-navigation -->
            </div><!-- #navbar -->
        </header><!-- #masthead -->

        <div id="main" class="site-main">