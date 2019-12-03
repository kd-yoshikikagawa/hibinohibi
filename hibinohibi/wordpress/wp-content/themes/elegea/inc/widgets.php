<?php
/**
 * Elegea widgets
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elegea
 */


/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elegea_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'elegea' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Menu Widget Area', 'elegea' ),
		'id'            => 'menu-widget',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Left', 'elegea' ),
		'id'            => 'footer-left',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Right Top 1', 'elegea' ),
		'id'            => 'footer-right-top-1',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Right Top 2', 'elegea' ),
		'id'            => 'footer-right-top-2',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Right Bottom 1', 'elegea' ),
		'id'            => 'footer-right-bottom-1',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Right Bottom 2', 'elegea' ),
		'id'            => 'footer-right-bottom-2',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom Left', 'elegea' ),
		'id'            => 'footer-bottom-left',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom Right', 'elegea' ),
		'id'            => 'footer-bottom-right',
		'description'   => esc_html__( 'Add widgets here.', 'elegea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    

    
}
add_action( 'widgets_init', 'elegea_widgets_init' );
