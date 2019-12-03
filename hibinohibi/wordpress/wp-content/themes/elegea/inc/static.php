<?php

/**
 * Enqueue scripts and styles.
 */
function elegea_scripts() {
    
    
    /**
     * Enqueue styles.
     */
    wp_enqueue_style( 'swiper' , get_template_directory_uri() . '/css/swiper.min.css');
    
    wp_enqueue_style( 'aos' , get_template_directory_uri() . '/css/aos.css');
    
    wp_enqueue_style( 'bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_style( 'bootstrap-map' , get_template_directory_uri() . '/css/bootstrap.min.css.map');
    
    wp_enqueue_style( 'elegea-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'elegea-responsive-style', get_template_directory_uri() . '/css/responsive.css');
    
    
    /**
     * Enqueue scripts.
     */
    
     wp_enqueue_script( 'elegea-pace-settings', get_template_directory_uri() . '/js/pace-settings.js');
    
    wp_enqueue_script( 'pace', get_template_directory_uri() . '/js/pace.min.js');
    
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js');
    
    wp_enqueue_script( 'lax', get_template_directory_uri() . '/js/lax.min.js' , array('jquery'), '1.0.0' , true);
    
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js' , array('jquery'), '1.0.0' , true); 
    
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js' , array('jquery'), '1.0.0' , true); 
    
   	wp_enqueue_script( 'elegea-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'elegea-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
     wp_enqueue_script( 'elegea-scripts', get_template_directory_uri() . '/js/scripts.js' , array('jquery'), '1.0.0' , true); 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'elegea_scripts' );


/**
 * Register fonts
 * Register fonts
 */

function elegea_add_google_fonts() {
    $font_url = '';
  
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'elegea' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Playfair+Display:400,700|Source+Sans+Pro:400,600,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}