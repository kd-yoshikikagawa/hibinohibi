<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegea
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="elg-blog-post">
            <div class="elg-blog-post-title">

                <a class="entry-title" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <?php elegea_post_thumbnail(); ?>
            <footer class="entry-footer">

                <?php 
                the_excerpt();
                elegea_posted_on();
                        elegea_posted_by();
                elegea_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
</article><!-- #post-<?php the_ID(); ?> -->
