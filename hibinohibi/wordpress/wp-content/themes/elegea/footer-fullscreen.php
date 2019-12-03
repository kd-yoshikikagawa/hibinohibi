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

$socials = elegea_customize('social_profiles');

?>

</div><!-- #content -->

<footer id="colophon" class="fs-footer">
    <?php if (!empty ($socials)) : ?>
    <div class="fs-socials">
        <ul>
            <?php foreach ($socials as $social) : ?>
            <li><a class="ulink" target="_blank" href="<?php echo esc_url($social['social_url']) ?>"><?php echo esc_html($social['profile_title']); ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
    <?php endif ?>

     <div class="fs-copyright">
         <?php echo elegea_customize('footer_right') ?>
        </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
