<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'social' => array(
		'title'   => esc_html__( 'Social Profiles', 'elegea' ),
		'type'    => 'tab',
		'options' => array(
            'title' => array(
	           'type'  => 'html-full',
	           'label' => false,
	           'html'  => '<h1>'.esc_html__('Social Profiles', 'elegea').'</h1>',
	       ),
            
            'social_profiles' => array(
                'type' => 'addable-popup',
                'template' => '{{=profile_title}}',
                'label' => esc_html__('Add Profile' , 'elegea'),
                'desc' => esc_html__('Add your social links' , 'elegea'),
                'add-button-text' => __('Add', 'elegea'),
                'popup-title' => null,
                    'popup-options' => array(
                        'profile_title' => array(
                            'type' => 'text',
                            'label' => esc_html__('Profile Title' , 'elegea'),
                            'desc' => esc_html__('Enter your profile title.' , 'elegea'),
                        ),
                
                        'social_url' => array(
                            'type' => 'text',
                            'label' => esc_html__('Profile URL' , 'elegea'),
                            'desc' => esc_html__('Enter your profile URL' , 'elegea'),
                 
                        ),
            ),
        ),
            
 


                                               
            

		)
	)
);
