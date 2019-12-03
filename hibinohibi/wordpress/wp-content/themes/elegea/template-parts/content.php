<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegea
 */

?>

<div class="elg-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
		if ( is_singular() ) : ?>
        <div class="container">
            <div class="row">
                <?php if ((elegea_customize('post_sidebar') !== 'no_sidebar') && (elegea_customize('post_sidebar') === 'left_sidebar')): 
                get_sidebar();
                endif;
                ?>
                <div class="col-md-9 elg-single-blog-post">
                    <?php
    		if ( 'post' === get_post_type() ) :
			?>
                    <?php if (elegea_customize('post_sidebar') !== 'no_sidebar'): ?>
                    <header class="entry-header sidebar-active">
                        <?php 
                        elegea_post_thumbnail();
                        the_title('<h2 class="entry-title">' , '</h2>');
                        elegea_posted_on();
                        elegea_posted_by();
                        elegea_entry_footer();
				?>
                    </header><!-- .entry-meta -->
                    <?php else: ?>
                    <header class="entry-header">
                        <?php
                        elegea_posted_on();
                        elegea_posted_by();
                        elegea_entry_footer();
                        the_title('<h1 class="entry-title">' , '</h1>');
                         
                        elegea_post_thumbnail();
				?>
                    </header><!-- .entry-meta -->

                    <?php endif; endif; ?>
                    <div class="entry-content">
                        <?php
		                  the_content();

		                  wp_link_pages( array(
			                 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegea' ),
			                 'after'  => '</div>',
		                  ) );
		                  ?>
                    </div><!-- .entry-content -->

                    <div class="single-post-tags">
                        <?php the_tags(); ?>
                    </div>


                    <?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

                    <?php $next_post = get_next_post(); 
                    if (! empty ($next_post)) {?>
                    <div class="next-post">
                        <p><?php echo esc_html__('NEXT POST', 'elegea') ?></p>
                        <h1 class="next-post-title"><a href="<?php echo get_the_permalink($next_post) ?>"><?php echo get_the_title($next_post) ?></a></h1>
                    </div>
                    <?php } ?>
                </div>
                <?php if ((elegea_customize('post_sidebar') !== 'no_sidebar') && (elegea_customize('post_sidebar') === 'right_sidebar')): 
                get_sidebar();
                endif;
                ?>
            </div>
        </div>
        <?php else : ?>
        <!-- not-singular -->
        <?php if (elegea_customize('blog_style') === 'list') : ?>
        <div class="elg-blog-post">
            <div class="elg-blog-post-title">

                <a class="entry-title" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <?php elegea_post_thumbnail(); ?>
            <footer class="entry-footer">

                <?php 
                elegea_posted_on();
                        elegea_posted_by();
                elegea_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
        <?php else : ?>
        <div class="elg-blog-post-cl">
            <?php elegea_post_thumbnail(); ?>
            <footer class="entry-footer-cl">
                <div class="elg-blog-post-title-cl">
                    <a class="entry-title" href="<?php echo get_the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>

                </div>
                <?php  elegea_posted_on();
                        elegea_posted_by();
                 elegea_entry_footer(); 
                ?>
                <a class="read-more" href="<?php echo get_the_permalink(); ?>"><?php echo esc_html('READ MORE' , 'elegea') ?> </a>
            </footer><!-- .entry-footer -->
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>
