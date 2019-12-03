<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => esc_html__( 'Choose Image', 'elegea' ),
		'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'elegea' )
	),
	'size'             => array(
		'type'    => 'group',
		'options' => array(
			'width'  => array(
				'type'  => 'text',
				'label' => esc_html__( 'Width', 'elegea' ),
				'desc'  => esc_html__( 'Set image width', 'elegea' ),
				'value' => 300
			),
			'height' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Height', 'elegea' ),
				'desc'  => esc_html__( 'Set image height', 'elegea' ),
				'value' => 200
			)
		)
	),
    
    'img_alignment' => array(
        'type' => 'radio',
        'label' => esc_html__('Alignment' , 'elegea'),
        'desc' => esc_html__('Select image alignment' , 'elegea'),
        'choices' => array (
            'float: left' => esc_html__('Left' , 'elegea'),
            'margin: 0 auto; display: block' => esc_html__('Center' , 'elegea'),
            'float: right' => esc_html__('Right' , 'elegea'),
        ),
        'value' => 'left',
    
    ),
    
    'image_animation' => array(
        'type' => 'select',
        'label' => esc_html__('Animation' , 'elegea'),
        'desc' => esc_html__('Select an animation for this image' , 'elegea'),
        'choices' => array(
            'none' => esc_html__('None' , 'elegea'),
            'fade-up' => esc_html__('Fade Up' , 'elegea'),
            'fade-down' => esc_html__('Fade Dowm' , 'elegea'),
            'fade-right' => esc_html__('Fade Right' , 'elegea'),
            'fade-left' => esc_html__('Fade Left' , 'elegea'),
            'fade-up-right' => esc_html__('Fade Up Right' , 'elegea'),
            'fade-up-left' => esc_html__('Fade Up Left' , 'elegea'),
            'fade-down-right' => esc_html__('Fade Down Right' , 'elegea'),
            'fade-down-left' => esc_html__('Fade Down Left' , 'elegea'),
            'flip-left' => esc_html__('Flip Left' , 'elegea'),
            'flip-right' => esc_html__('Flip Right' , 'elegea'),
            'flip-up' => esc_html__('Flip Up' , 'elegea'),
            'flip-down' => esc_html__('Flip Down' , 'elegea'),
            'zoom-in' => esc_html__('Zoom In' , 'elegea'),
            'zoom-in-up' => esc_html__('Zoom In Up' , 'elegea'),
            'zoom-in-down' => esc_html__('Zoom In Down' , 'elegea'),
            'zoom-in-left' => esc_html__('Zoom In Left' , 'elegea'),
            'zoom-in-right' => esc_html__('Zoom In Right' , 'elegea'),
            'zoom-out' => esc_html__('Zoom Out' , 'elegea'),
            'zoom-out-up' => esc_html__('Zoom Out Up' , 'elegea'),
            'zoom-out-down' => esc_html__('Zoom Out Down' , 'elegea'),
            'zoom-out-left' => esc_html__('Zoom Out Left' , 'elegea'),
            'zoom-out-right' => esc_html__('Zoom Out Right' , 'elegea'),
        ),
        'value' => 'none',
    
    ),
    
    'animation_duration' => array (
        'type' => 'short-text',
        'label' => esc_html__('Animation Duration' , 'elegea'),
        'desc' => esc_html__('Enter animation duration time (1000 = 1s)' , 'elegea'),
    ),
    
	'image-link-group' => array(
		'type'    => 'group',
		'options' => array(
			'link'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Image Link', 'elegea' ),
				'desc'  => esc_html__( 'Where should your image link to?', 'elegea' )
			),
			'target' => array(
				'type'         => 'switch',
				'label'        => esc_html__( 'Open Link in New Window', 'elegea' ),
				'desc'         => esc_html__( 'Select here if you want to open the linked page in a new window', 'elegea' ),
				'right-choice' => array(
					'value' => '_blank',
					'label' => esc_html__( 'Yes', 'elegea' ),
				),
				'left-choice'  => array(
					'value' => '_self',
					'label' => esc_html__( 'No', 'elegea' ),
				),
			),
		)
	)
);

