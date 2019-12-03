<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'elegea' ),
		'desc'  => esc_html__( 'Enter your title', 'elegea' ),
	),
    
    'text' => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Text', 'elegea' ),
		'desc'  => esc_html__( 'Enter your text', 'elegea' ),
	),
    
    'link_text' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Link Text', 'elegea' ),
		'desc'  => esc_html__( 'Enter your button text', 'elegea' ),
	),
    
    'link_url' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Link URL', 'elegea' ),
		'desc'  => esc_html__( 'Enter your link url', 'elegea' ),
	),
    
    'link_target' => array(
        'type' => 'switch',
        'label' => esc_html__('Link Target' , 'elegea'),
        'desc' => esc_html__('Switch "yes" if you want to open link in new window' , 'elegea'),
        'left-choice' => array(
            'value' => 'no',
            'label' => esc_html__('No' , 'elegea'),
        ),
        
        'right-choice' => array(
            'value' => 'yes',
            'label' => esc_html__('Yes' , 'elegea'),
        ),
    
    ),
    

    
    'custom_class' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Custom Class', 'elegea' ),
		'desc'  => esc_html__( 'Enter your custom class for this element', 'elegea' ),
	),
    
    

);
