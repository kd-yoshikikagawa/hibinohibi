<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    

	'heading_title' => array(
        'type' => 'text',
        'label' => esc_html__('Heading Title' , 'elegea'),
        'desc' => esc_html__('Enter your heading title' , 'elegea'),
    ),
    
    'heading_size' => array(
        'type' => 'select',
        'label' => esc_html__('Heading Size' , 'elegea'),
        'desc' => esc_html__('Select your heading size' , 'elegea'),
        'choices' => array (
            'h1 class="big-title"' => esc_html__('H1 (Big)' , 'elegea'),
            'h1' => esc_html__('H1' , 'elegea'),
            'h2' => esc_html__('H2' , 'elegea'),
            'h3' => esc_html__('H3' , 'elegea'),
            'h4' => esc_html__('H4' , 'elegea'),
            'h5' => esc_html__('H5' , 'elegea'),
            'h6' => esc_html__('H6' , 'elegea'),
            'p' => esc_html__('p' , 'elegea'),
        ),
        'value' => 'h1',
    ),
    
    'heading_font_size' => array (
        'type' => 'short-text',
        'label' => esc_html__('Font Size' , 'elegea'),
        'desc' => esc_html__('Leave it empty if you want to use default font size.' , 'elegea'),
    ),
    
    'heading_alignment' => array(
        'type' => 'radio',
        'label' => esc_html__('Heading Alignment' , 'elegea'),
        'desc' => esc_html__('Select your heading alignment' , 'elegea'),
        'choices' => array (
            'left' => esc_html__('Left' , 'elegea'),
            'center' => esc_html__('Center' , 'elegea'),
            'right' => esc_html__('Right' , 'elegea'),
        ),
        'value' => 'center',
    ),
    
    'heading_color' => array(
        'type' => 'color-picker',
        'label' => esc_html__('Heading Color' , 'elegea'),
        'desc' => esc_html__('Select your heading alignment' , 'elegea'),

    ),        


);
