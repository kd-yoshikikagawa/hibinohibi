<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    
    'general_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('General' , 'elegea'),
        'options' => array (
            
            
    'column_padding' => array(
        'label' => esc_html__('Padding' , 'elegea'),
        'desc' => esc_html__('E.g. 10px 50px 20px 90px' , 'elegea'),
        'type' => 'text',
        'help' => esc_html__('Top , Right , Bottom , Left' , 'elegea'),
    ),
    
    'column_margin' => array(
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
            
            
        
        
        ),
    
    ),
    
    'parallax_settings' => array (
        'type' => 'tab',
        'title' => 'Parallax',
        'options' => array(
            'parallax_effect' => array(
                'type' => 'switch',
                'label' => esc_html__('Parallax Effect' , 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('No' , 'elegea'),
                    'value' => 'no'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Yes' , 'elegea'),
                    'value' => 'yes'
                ),
                'value' => 'no',
            
            ),
            
            'select_parallax' => array (
                'type' => 'select',
                'label' => esc_html__('Select Parallax' , 'elegea'),
                'choices' => array(
                    'linger' => esc_html__('Linger' , 'elegea'),
                    'lazy' => esc_html__('Lazy' , 'elegea'),
                    'eager' => esc_html__('Eager' , 'elegea'),
                    'slalom' => esc_html__('Slalom' , 'elegea'),
                    'spin' => esc_html__('Spin' , 'elegea'),
                    'spinIn' => esc_html__('Spin In' , 'elegea'),
                    'spinOut' => esc_html__('Spin Out' , 'elegea'),
                    'driftLeft' => esc_html__('Drift Left' , 'elegea'),
                    'driftRight' => esc_html__('Drift Right' , 'elegea'),
                ),
            
            ),
            
            'parallax_strength' => array(
                'type' => 'short-text',
                'label' => esc_html__('Parallax Strength' , 'elegea'),
                'desc' => esc_html__('Enter your parallax strength (1-1000)' , 'elegea'),
                
            
            ),
            
            'column_z_index' => array(
                'type' => 'short-text',
                'label' => esc_html__('Z-Index' , 'elegea'),
                'desc' => esc_html__('Enter z-index for this column.' , 'elegea'),
                
            
            ),
        
        
        
        ),
    ),
    
    

);
