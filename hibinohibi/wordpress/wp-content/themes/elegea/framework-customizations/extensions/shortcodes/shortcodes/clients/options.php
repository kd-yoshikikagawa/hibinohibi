<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
    'clients' => array(
        'type' => 'addable-popup',
        'template' => '<img src="{{=logo.url}}" class="sh-builder-option-image" height="65" />',
        'label' => esc_html__('Add Clients' , 'elegea'),
        'desc' => esc_html__('Add your clients' , 'elegea'),
        'add-button-text' => esc_html__('Add Client', 'elegea'),
        'popup-title' => null,
            'popup-options' => array(
                
                'logo' => array(
                    'type' => 'upload',
                    'label' => esc_html__('Client Logo' , 'elegea'),
                    'desc' => esc_html__('Enter client logo' , 'elegea'),
                ),
                
                'website' => array(
                    'type' => 'text',
                    'label' => esc_html__('Client Website' , 'elegea'),
                    'desc' => esc_html__('Logo click target' , 'elegea'),
                 
                ),
            ),
    ),
    'custom_class' => array(
                    'type' => 'text',
                    'label' => esc_html__('Custom Class' , 'elegea'),
                    'desc' => esc_html__('Add custom class for this element' , 'elegea'),
                
                ),
          
   
);
