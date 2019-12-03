<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'blog' => array(
		'title'   => esc_html__( 'Blog Settings', 'elegea' ),
		'type'    => 'tab',
		'options' => array(
            'blog_settings_title' => array(
	           'type'  => 'html-full',
	           'value' => '',
	           'label' => false,
	           'html'  => '<h1 class="setting-title">'.esc_html__('Blog Page Settings', 'elegea').'</h1>',
	       ),
             'blog_title' => array(
                'label' => esc_html__('Blog Page Title' , 'elegea'),
                'desc'  => esc_html__('Enter blog page title' , 'elegea'),
                'type'  => 'text',
                'value' => esc_html__('Stories' , 'elegea')
            ),
            'blog_sub_title' => array(
                'label' => esc_html__('Blog Page Sub-Title' , 'elegea'),
                'desc'  => esc_html__('Enter blog page sub-title' , 'elegea'),
                'type'  => 'text',
            ),
            
            'blog_style' => array(
                'label' => esc_html__('Blog Page Style' , 'elegea'),
                'desc'  => esc_html__('Select blog page style' , 'elegea'),
                'type'  => 'radio',
                'choices' => array(
                    'list' => esc_html__('List' , 'elegea'),
                    'classic' => esc_html__('Classic' , 'elegea'),
                ),
                'value' => 'list',
            ),
            
            'blog_sidebar' => array(
                'label' => esc_html__('Blog Page Sidebar' , 'elegea'),
                'desc'  => esc_html__('This selection for only "Classic" layout. ' , 'elegea'),
                'type'  => 'radio',
                'choices' => array(
                    'no_sidebar' => esc_html__('No Sidebar' , 'elegea'),
                    'right_sidebar' => esc_html__('Right Sidebar' , 'elegea'),
                    'left_sidebar' => esc_html__('Left Sidebar' , 'elegea'),
                ),
                'value' => 'list',
            ),
            
            'single_post_settings_title' => array(
	           'type'  => 'html-full',
	           'value' => '',
	           'label' => false,
	           'html'  => '<h1 class="setting-title">'.esc_html__('Single Post Settings', 'elegea').'</h1>',
	       ),
            
            'post_sidebar' => array(
                'label' => esc_html__('Post Sidebar' , 'elegea'),
                'desc'  => esc_html__('Select post sidebar position' , 'elegea'),
                'type'  => 'radio',
                'choices' => array(
                    'no_sidebar' => esc_html__('No Sidebar' , 'elegea'),
                    'right_sidebar' => esc_html__('Right Sidebar' , 'elegea'),
                    'left_sidebar' => esc_html__('Left Sidebar' , 'elegea'),
                ),
                'value' => 'right_sidebar',
            ),

            
            

		)
	)
);
