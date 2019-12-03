<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */

?>

<div class="s-info-box <?php echo esc_attr($atts["custom_class"]); ?>">
    <div class="s-info-box-head">
        <h4 class="s-info-box-title"><?php echo esc_html($atts['title']);  ?></h4>
        <span class="s-info-box-title-underline"></span>
    </div>
    <div class="s-info-box-content">
        <p><?php echo esc_html($atts['text']); ?></p>
        <?php if (!empty ($atts['link_text'])) : ?>
        <a class="s-info-box-link ulink" href="<?php echo esc_attr($atts['link_url']); ?>">
            <?php echo esc_html($atts['link_text']);  ?>
        </a>
        <?php endif; ?>
    </div>
</div>
