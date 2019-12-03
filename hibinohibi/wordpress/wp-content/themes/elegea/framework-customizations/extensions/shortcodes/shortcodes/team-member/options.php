<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image' => array(
		'label' => esc_html__( 'Team Member Image', 'elegea' ),
		'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'elegea' ),
		'type'  => 'upload'
	),
	'name'  => array(
		'label' => esc_html__( 'Team Member Name', 'elegea' ),
		'desc'  => esc_html__( 'Name of the person', 'elegea' ),
		'type'  => 'text',
		'value' => ''
	),
	'job'   => array(
		'label' => esc_html__( 'Team Member Job Title', 'elegea' ),
		'desc'  => esc_html__( 'Job title of the person.', 'elegea' ),
		'type'  => 'text',
		'value' => ''
	),
            
        'social_profiles' => array(
            'type'  => 'addable-box',
            'label' => esc_html__('Social Links', 'elegea'),
            'desc'  => esc_html__('Description', 'elegea'),
            'box-options' => array(
                'social_name' => array( 'type' => 'short-text' ),
                'social_link' => array( 'type' => 'text' ),
            ),
            
            'template' => '{{- social_link }}', // box title
            'limit' => 0,
            'add-button-text' => esc_html__('Add', 'elegea'),
            'sortable' => true,
            ),
);