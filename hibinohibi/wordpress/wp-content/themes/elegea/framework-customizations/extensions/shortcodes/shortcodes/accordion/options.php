<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Tabs', 'elegea' ),
		'popup-title'   => esc_html__( 'Add/Edit Tabs', 'elegea' ),
		'desc'          => esc_html__( 'Create your tabs', 'elegea' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title'   => array(
				'type'  => 'text',
				'label' => esc_html__('Title', 'elegea')
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => esc_html__('Content', 'elegea')
			)
		)
	)
);