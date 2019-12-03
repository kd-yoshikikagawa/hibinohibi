<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer' => array(
		'title'   => esc_html__( 'Footer Settings', 'elegea' ),
		'type'    => 'tab',
		'options' => array(
            
            'footer_right' => array(
                'type' => 'wp-editor',
                'label' => esc_html__('Footer Right Content Area' , 'elegea'),
                'desc' => esc_html__('Enter your content for right footer area' , 'elegea')
            
            ),


		)
	)
);















