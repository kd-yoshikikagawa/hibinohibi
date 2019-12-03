<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
?>




<?php 

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$column_padding = '';
if( ! empty ($atts['column_padding'])) {
    $column_padding = 'padding:' . $atts['column_padding'] . ';';
}

$column_margin = '';
if( ! empty ($atts['column_margin'])) {
    $column_padding = 'margin:' . $atts['column_margin'] . ';';
}

$z_index = '';
if( ! empty ($atts['column_z_index'])) {
    $column_padding = 'z-index:' . $atts['column_z_index'] . ';';
}

$bg_fixed = '';
if( ($atts['background_fixed']) === 'yes' ) {
    $bg_fixed = 'background-attachment: fixed;' ;
}


$parallax = '';

if ( ($atts['parallax_effect']) !== 'no') {
    
  $parallax = 'data-lax-preset="' . $atts['select_parallax'] .'-'. $atts['parallax_strength']. '"';  
    
}


?>


<div class="elegea_column lax <?php echo esc_attr($class); ?>" style="<?php echo esc_attr($column_margin) . esc_attr($column_padding) . esc_attr($bg_image) . esc_attr($bg_color) . esc_attr($bg_fixed) . '"' . $parallax ?>  >
	<?php echo do_shortcode($content); ?>
</div>
