<?php if (!defined('FW')) die('Forbidden');

// find the uri to the shortcode folder
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/team-member');
wp_enqueue_style(
    'fw-shortcode-services',
    $uri . '/static/css/styles.css'
);
