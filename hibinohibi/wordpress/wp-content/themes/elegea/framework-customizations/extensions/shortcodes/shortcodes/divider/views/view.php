<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( 'line' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-line <?php if ($atts['mobile_display'] === 'no') : echo 'hide-on-mobile'; endif; ?>"><hr/></div>
<?php endif; ?>

<?php if ( 'space' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-space <?php if ($atts['mobile_display'] === 'no') : echo 'hide-on-mobile'; endif; ?>" style="padding-top: <?php echo (int) $atts['style']['space']['height']; ?>px;"></div>
<?php endif; ?>