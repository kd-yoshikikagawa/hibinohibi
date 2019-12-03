<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>

<?php 

$h_size = '';
if ( ! empty( $atts['heading_size'] ) ) {
	$h_size = $atts['heading_size'];
}

$h_alignment = '';
if ( ! empty( $atts['heading_alignment'] ) ) {
	$h_alignment = 'text-align:' . $atts['heading_alignment'] . ';';
}

$h_color = '';
if ( ! empty( $atts['heading_color'] ) ) {
	$h_color = 'color:' . $atts['heading_color'] . ';';
}

$h_title = '';
if ( ! empty( $atts['heading_title']  ) ) {
	$h_title = $atts['heading_title'] ;
}

$f_size = '';
if ( ! empty( $atts['heading_font_size']  ) ) {
	$f_size = 'font-size:' . $atts['heading_font_size'] . ';' ;
}

?>


<div class="elg-heading">
<?php echo '<' . $h_size . ' style="' . $h_alignment . $h_color . $f_size . '"' . '>' . $h_title . "</" . $h_size . '>' ?>

</div>

