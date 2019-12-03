<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'title'   => esc_html__('Page Options' , 'elegea'),
		'type'    => 'box',
		'options' => array(
            'page_header' => array(
                'type' => 'tab',
                'title' => esc_html__('Page Header' , 'elegea'),
                    'options' => array(
                        'page_header_show' => array(
                            'type' => 'switch',
                            'label' => esc_html__('Page Header', 'elegea'),
                            'desc' => esc_html__('Switch "yes" if you want to display page title.', 'elegea'),
                            'value' => 'yes',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes' , 'elegea'),
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No' , 'elegea'),
                                ),
                        ),
                        'page_title' => array(
                            'type' => 'text',
                            'label' => esc_html__('Page Title' , 'elegea'),
                            'desc' => esc_html__('Enter page title' , 'elegea'),
                            'help' => esc_html__('Leave it blank if you want to display default page title' , 'elegea'),
                        ),
                        
                        'page_sub_title' => array(
                            'type' => 'text',
                            'label' => esc_html__('Page Sub-Title' , 'elegea'),
                            'desc' => esc_html__('Enter page sub-title' , 'elegea'),
                        ),
                    
                    ),
            ),
			
		),
	),
);