<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegea
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">




        <?php
		if ( have_posts() ) : ?>
        <?php if (elegea_customize('blog_style') !== 'list'): ?>
        <div class="container">
            <div class="row">
                <?php endif; ?>
                <div class="blog-page-title <?php if (elegea_customize('blog_style') !== 'list'): echo 'title-center'; else: echo 'title-list'; endif; ?>">
                    <h1 class="big-title"><?php echo elegea_customize('blog_title') ?></h1>
                    <p><?php echo elegea_customize('blog_sub_title') ?></p>
                </div>
                <?php if ((elegea_customize('blog_style') !== 'list') && (elegea_customize('blog_sidebar') === 'left_sidebar')) :
               
                  get_sidebar();
              
               endif; ?>
                <div class="elg-posts-content  <?php if (elegea_customize('blog_style') !== 'list'): echo 'col-md-9 posts-classic'; endif; ?>">


                    <?php if ( is_home() && ! is_front_page() ) :
				?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                    <?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			 elegea_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' ); ?>
                    <?php 	endif;

		?>
                </div>

                <?php if ((elegea_customize('blog_style') !== 'list') and (elegea_customize('blog_sidebar') === 'right_sidebar')) :
               
                  get_sidebar();
              
               endif; ?>





                <?php if (elegea_customize('blog_style') !== 'list'): ?>
            </div>
        </div>
        <?php endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
