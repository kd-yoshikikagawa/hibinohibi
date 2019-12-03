<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => esc_html__( 'Content', 'elegea' ),
		'desc'   => esc_html__( 'Enter some content for this texblock', 'elegea' )
	),
    
    'custom_class' => array(
        'type' => 'text',
        'label' => esc_html__('Custom Class' , 'elegea'),
        'desc' => esc_html__('Enter your custom class for this element' , 'elegea'),
    
    ),
);
