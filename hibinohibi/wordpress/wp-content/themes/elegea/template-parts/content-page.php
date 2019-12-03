<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegea
 */

$option = elegea_page_option(get_the_ID() , '/main')
    
?>
<div class="page-content container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (! empty ($option['page_title']) && ($option['page_header_show'] !== 'no')) : ?>
        <header class="entry-header">
            <div class="elg-page-title"><?php echo esc_html($option['page_title']) ?>
            </div>
            <h1 class="elg-sub-text entry-title"><?php echo esc_html($option['page_sub_title']) ?></h1>
        </header><!-- .entry-header -->
        <?php 
        
      endif; ?>
         <?php if (empty ($option['page_title']) && ($option['page_header_show'] !== 'no')) : ?>
        <header class="entry-header">
            <h1 class="elg-df-page-title"><?php echo get_the_title(); ?>
            </h1>
        </header><!-- .entry-header -->
        <?php 
        
      endif; ?>
        
        <?php elegea_post_thumbnail(); ?>

        <div class="entry-content">
            <?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegea' ),
			'after'  => '</div>',
		) );
		?>
        </div><!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'elegea' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
        </footer><!-- .entry-footer -->
        <?php endif; ?>
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php 		// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

</div>
