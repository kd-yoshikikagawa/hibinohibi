<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Insert Video URL', 'elegea' ),
		'desc'  => __( 'Insert Video URL to embed this video', 'elegea' )
	),
	'width'  => array(
		'type'  => 'text',
		'label' => __( 'Video Width', 'elegea' ),
		'desc'  => __( 'Enter a value for the width', 'elegea' ),
		'value' => 300
	),
	'height' => array(
		'type'  => 'text',
		'label' => __( 'Video Height', 'elegea' ),
		'desc'  => __( 'Enter a value for the height', 'elegea' ),
		'value' => 200
	)
);
