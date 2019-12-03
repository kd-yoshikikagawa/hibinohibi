<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegea
 */

?>

</div><!-- #content -->
<?php if ( is_active_sidebar( 'footer-left' )  ||  is_active_sidebar('footer-right-top-1') || is_active_sidebar('footer-right-top-2') || is_active_sidebar('footer-right-bottom-1') || is_active_sidebar('footer-right-bottom-2') || is_active_sidebar( 'footer-bottom-left' ) || is_active_sidebar( 'footer-bottom-right' )) : ?>
<footer id="colophon" class="site-footer">
    <div class="elg-footer container">

        <?php if ( is_active_sidebar( 'footer-left' )  ||  is_active_sidebar('footer-right-top-1') || is_active_sidebar('footer-right-top-2') || is_active_sidebar('footer-right-bottom-1') || is_active_sidebar('footer-right-bottom-2') ) : ?>
        <div class="row footer-top">
            <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>

            <div class="col-md-6 footer-column footer-left"><?php dynamic_sidebar( 'footer-left' ); ?></div>

            <?php endif; ?>

            <div class="col-md-6">
                <div class="row footer-top-right">
                    <?php if ( is_active_sidebar('footer-right-top-1')) : ?>
                    <div class="col-md-6 footer-column footer-right-top-1">

                        <?php dynamic_sidebar('footer-right-top-1'); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar('footer-right-top-2')) : ?>
                    <div class="col-md-6 footer-column footer-right-top-2">

                        <?php dynamic_sidebar('footer-right-top-2'); ?>
                    </div>
                    <?php endif; ?>


                </div>

                <div class="row">
                    <?php if ( is_active_sidebar('footer-right-bottom-1')) : ?>
                    <div class="col-md-6 footer-column footer-right-bottom-1">

                        <?php dynamic_sidebar('footer-right-bottom-1'); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar('footer-right-bottom-2')) : ?>
                    <div class="col-md-6 footer-column footer-right-bottom-2">

                        <?php dynamic_sidebar('footer-right-bottom-2'); ?>
                    </div>
                    <?php endif; ?>


                </div>
            </div>

        </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-bottom-left' ) || is_active_sidebar( 'footer-bottom-right' )) : ?>
        <div class="row footer-bottom">
            <?php if ( is_active_sidebar( 'footer-bottom-left' ) ) : ?>

            <div class="col-md-6 footer-column footer-bottom-left"><?php dynamic_sidebar( 'footer-bottom-left' ); ?></div>

            <?php endif; ?>


            <?php if ( is_active_sidebar( 'footer-bottom-right' ) ) : ?>

            <div class="col-md-6 footer-column footer-bottom-right"><?php dynamic_sidebar( 'footer-bottom-right' ); ?></div>

            <?php endif; ?>


        </div>
        <?php endif; ?>



    </div>
</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
