<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package praxis
 */

?>

<!doctype html>
<html class="no-js" lang="en" <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Pressionate" name="author"/>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
        
        <!-- Favicon Icon -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon"/>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    	<!-- Start Preloader -->
    	<div id="preloader">
		 	<div id="status">
		    	<div class="spinner">
			     	<div class="rect1"></div>
			     	<div class="rect2"></div>
			     	<div class="rect3"></div>
			     	<div class="rect4"></div>
			     	<div class="rect5"></div>
		    	</div>
		 	</div>
		</div>
		<!-- End Preloader -->

        <!-- Start Site Header -->
        <header class="site-header">
            <div class="container header-wrap">
                <div class="site-branding">
                <!-- For Image Logo -->
                    <a href="index.html" class="custom-logo-link">
                    <img src="img/logo.png" alt="" class="custom-logo">
                </a>
                <!-- For Site Title -->
                <!-- <span class="site-title">
                    <a href="index.html">Buildm</a>
                </span> -->
                </div>

                <?php echo praxis_nav_menu(); ?>
                
            </div><!-- .header-wrap -->
        </header>
        <!-- End Site Header -->