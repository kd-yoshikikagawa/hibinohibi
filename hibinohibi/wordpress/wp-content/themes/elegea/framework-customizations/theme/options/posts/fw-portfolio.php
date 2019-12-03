<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    
    'project-work-box' => array(
        'context' => 'side',
        'title' => esc_html__('Project Work' , 'elegea'),
        'type' => 'box',
        'options' => array(
            'project_work' => array(
                'label' => esc_html__('Project Work' , 'elegea'),
                'type' => 'text',
                'desc' => esc_html__('Enter your work for this portfolio' , 'elegea'),
            
            ),
        
        ),
        
    ),
    
    'project_date_box' => array(
        'context' => 'side',
        'title'   => esc_html__( 'Project Date', 'elegea' ),
        'type'    => 'box',
        'options' => array(
            'project_date' => array(
                'label' => false,
                'type'  => 'text',
                'desc'  => esc_html__('Enter project date' , 'elegea'),
            )
        )
    ),
    
    'project_client_box' => array(
        'context' => 'side',
        'title'   => esc_html__( 'Project Client', 'elegea' ),
        'type'    => 'box',
        'options' => array(
            'project_client' => array(
                'label' => false,
                'type'  => 'text',
                'desc'  => esc_html__('Enter project client' , 'elegea'),
            )
        )
    ),
    
    'project_summary_box' => array(
        'context' => 'side',
        'title' => esc_html__('Project Summary' , 'elegea'),
        'type' => 'box',
        'options' => array(
            'project_summary' => array(
                'label' => esc_html__('Project Summary' , 'elegea'),
                'type' => 'textarea',
                'desc' => esc_html__('Enter your project summary for this portfolio' , 'elegea'),
            
            ),
        
        ),
        
    ),
    

    
    
);
