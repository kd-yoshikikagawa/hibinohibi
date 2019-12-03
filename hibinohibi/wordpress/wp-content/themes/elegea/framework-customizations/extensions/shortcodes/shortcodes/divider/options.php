<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'ruler_type' => array(
				'type'    => 'select',
				'label'   => esc_html__( 'Ruler Type', 'elegea' ),
				'desc'    => esc_html__( 'Here you can set the styling and size of the HR element', 'elegea' ),
				'choices' => array(
					'line'  => esc_html__( 'Line', 'elegea' ),
					'space' => esc_html__( 'Whitespace', 'elegea' ),
				)
			)
		),
		'choices'     => array(
			'space' => array(
				'height' => array(
					'label' => esc_html__( 'Height', 'elegea' ),
					'desc'  => esc_html__( 'How much whitespace do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'elegea' ),
					'type'  => 'text',
					'value' => '50'
				)
			)
		)
        

	),
            'mobile_display' => array(
            'type' => 'switch',
            'label' => esc_html__('Mobile Visibility' , 'elegea'),
            'desc' => esc_html__('Switch "no" if want to hide this object on mobile' , 'elegea'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No' , 'elegea'),
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes' , 'elegea'),
                ),
                'value' => 'yes'
            
            
            
        ),
);
