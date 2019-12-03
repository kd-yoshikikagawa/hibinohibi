<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => esc_html__('Full Width', 'elegea'),
		'type'         => 'switch',
	),
    
    'section_padding' => array(
        'label' => esc_html__('Padding' , 'elegea'),
        'desc' => esc_html__('E.g. 10px 50px 20px 90px' , 'elegea'),
        'type' => 'text',
        'help' => esc_html__('Top , Right , Bottom , Left' , 'elegea'),
    ),
    
    'section_margin' => array(
        'label' => esc_html__('Margin' , 'elegea'),
        'desc' => esc_html__('E.g. 10px 50px 20px 90px' , 'elegea'),
        'type' => 'text',
        'help' => esc_html__('Top , Right , Bottom , Left' , 'elegea'),
    ),
    
	'background_color' => array(
		'label' => esc_html__('Background Color', 'elegea'),
		'desc'  => esc_html__('Please select the background color', 'elegea'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => esc_html__('Background Image', 'elegea'),
		'desc'    => esc_html__('Please select the background image', 'elegea'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
    'background_fixed' => array(
        'label' => esc_html__('Fixed Background' , 'elegea'),
        'type' => 'switch',
        'left-choice' => array(
            'value' => 'no',
            'label' => esc_html__('No' , 'elegea')
        ),
        'right-choice' => array(
            'value' => 'yes',
            'label' => esc_html__('Yes' , 'elegea')
        ),
        'value' => 'no'
    
    ),
	'video' => array(
		'label' => esc_html__('Background Video', 'elegea'),
		'desc'  => esc_html__('Insert Video URL to embed this video', 'elegea'),
		'type'  => 'text',
	)
);
