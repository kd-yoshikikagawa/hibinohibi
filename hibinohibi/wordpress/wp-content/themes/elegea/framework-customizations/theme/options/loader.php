<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'page_loader' => array(
		'title'   => esc_html__( 'Page Loader Settings', 'elegea' ),
		'type'    => 'tab',
		'options' => array(
            
            'page_loader_skin' => array(
                'type' => 'switch',
                'label' => esc_html__('Page Loader Skin', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Dark','elegea'),
                    'value' => 'dark'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Light','elegea'),
                    'value' => 'light'
                ),
                'value' => 'light'
                ),
            
            'page_loader_logo' => array(
                'type' => 'upload',
                'label' => esc_html__('Page Loader Logo' , 'elegea'),
                'desc' => esc_html__('Upload your logo for page loader' , 'elegea')
            
            ),


		)
	)
);















