<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Elegea
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function elegea_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'elegea_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function elegea_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'elegea_pingback_header' );


add_filter( 'widget_tag_cloud_args', 'elegea_tag_cloud_font_sizes');
/**
 * Change the Tag Cloud's Font Sizes.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
function elegea_tag_cloud_font_sizes( array $args ) {
    $args['smallest'] = '14';
    $args['largest'] = '14';
    $args['unit'] = 'px';

    return $args;
};

if (!function_exists('elegea_comments')) {
    
function elegea_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
    $is_pingback_comment = $comment->comment_type == 'pingback';
    $comment_class = 'comment';
    if ( $is_pingback_comment ) {
        $comment_class .= ' pingback-comment';
    }
	?>

<li>
    <div class="<?php echo esc_attr($comment_class); ?> row">
        <div class="col-md-2 comment-meta">
            <?php if ( ! $is_pingback_comment ) { ?>
            <div class="image"> <?php echo get_avatar($comment, 100); ?> </div>
            <?php } ?>

            <h5 class="name"><?php if ( $is_pingback_comment ) { esc_html_e( 'Pingback:', 'elegea' ); } ?><?php echo get_comment_author_link(); ?></h5>
            <span class="comment_date"><?php comment_date(); ?></span>
            </div>

        <div class="text_holder col-md-8" id="comment-<?php echo comment_ID(); ?>">
            <?php comment_text(); ?>
        </div>
        
        <?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?>

    </div>

    <?php if ($comment->comment_approved == '0') : ?>
    <p><em><?php esc_html_e('Your comment is awaiting moderation.', 'elegea'); ?></em></p>
    <?php endif; ?>
    <?php 
}
}


// Modify comments header text in comments
add_filter( 'elegea_title_comments', 'child_title_comments');
function elegea_child_title_comments() {
    return esc_html__e(comments_number( '<h3>No Responses</h3>', '<h3>1 Response</h3>', '<h3>% Responses...</h3>' ), 'elegea');
}
 
// Add placeholder for Name and Email
function elegea_comment_form_fields($fields){
    
    
    $commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . __( '(optional)', 'elegea' );
	$aria_req  = $req ? "aria-required='true'" : '';
    
    $fields['author'] = '<p class="comment-form-author">' . '<input id="author" placeholder="Name *" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                ( $req ? '<span class="required"></span>' : '' )  .
                '</p>';
    $fields['email'] = '<p class="comment-form-email">' . '<input id="email" placeholder="E-mail *" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  . 
                ( $req ? '<span class="required"></span>' : '' ) 
                 .
                '</p>';
    $fields['url'] = '<p class="comment-form-url">' .
             '<input id="url" name="url" placeholder="Website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
               '</p>';
    
    return $fields;
}
add_filter('comment_form_default_fields','elegea_comment_form_fields'); 
                
function elegea_comment_field( $comment_field ) {

  $comment_field =
    '<p class="comment-form-comment">
            <textarea required id="comment" name="comment" placeholder="' . esc_attr__( "Your comment...", "elegea" ) . '" cols="45" rows="2" aria-required="true"></textarea>
        </p>';

  return $comment_field;
}
add_filter( 'comment_form_field_comment', 'elegea_comment_field' );  

function elegea_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
  
    echo '<div class="posts-navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<div class="prev-posts">%s</div>' . "\n", get_previous_posts_link('prev') );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<div%s><h2><a href="%s">%s</a></h2></div>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<div><span class="posts-navigation-line"></span></div>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<div%s><h2><a href="%s">%s</a></h2></div>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<div><span class="posts-navigation-line"></span></div>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<div%s><h2><a href="%s">%s</a></h2></div>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<div class="next-posts">%s</div>' . "\n", get_next_posts_link('next') );
 
    echo '</ul></div>' . "\n";
 
};

function elegea_light_logo_customize( $wp_customize ) {
    $wp_customize->add_setting(
        'light_logo',
        array(
            'default' => '',
            'theme_mod' => 'image', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr'
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'light_logo',
        array(
            'label'      => esc_html__( 'Light Logo', 'elegea' ),
            'settings'   => 'light_logo',
            'priority'   => 10,
            'section'    => 'title_tagline',
            
          
        )
    ) );
}
add_action( 'customize_register', 'elegea_light_logo_customize' );


                
