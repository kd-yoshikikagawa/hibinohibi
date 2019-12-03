<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <div id="page" class="site">
    <div class="page-trans <?php if (elegea_customize('page_loader_skin') !== 'light'): echo 'trans-dark'; endif; ?>">
            <div class="page-trans-top page-trans-top-before"></div>
            <div class="page-trans-bottom page-trans-bottom-before"></div>


        </div> 

        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elegea' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="site-branding">

                <?php	
                if (has_custom_logo()) : ?>
                <div class="dark-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="light-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php echo esc_url( get_theme_mod( 'light_logo' ) ); ?>">
                    </a>
                </div>
                <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <p class="site-description"><?php echo get_bloginfo( 'description', 'display' ); /* WPCS: xss ok. */ ?></p>
                <?php endif; ?>

            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <div class="elg-navigation">
                    <div class="elg-hamburger">
                        <span class="elg-nav-line first-line"></span>
                        <span class="elg-nav-line cor-line"></span>
                        <span class="elg-nav-line second-line"></span>
                    </div>
                    <p><?php echo esc_html__('Menu' , 'elegea') ?></p>
                </div>
                <div class="fs-menu">

                    <?php
			             wp_nav_menu( array(
				            'theme_location' => 'menu-1',
				            'menu_id'        => 'primary-menu',
			             ) );
			         ?>
                    <span class="fs-menu-seperator"></span>

                    <?php if ( is_active_sidebar( 'menu-widget' ) ) : ?>
                    <div class="menu-sidebar-foundation">
                        <div id="menu-sidebar" class="menu-sidebar widget-area" role="complementary">
                            <?php dynamic_sidebar( 'menu-widget' ); ?>
                        </div><!-- #primary-sidebar -->
                    </div>
                    <?php endif; ?>

                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">
