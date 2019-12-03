<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio' => array(
		'title'   => esc_html__( 'Portfolio Settings', 'elegea' ),
		'options' => array(
        'slideshow' => array(
            'title' => esc_html__('Portfolio Horizontal' , 'elegea'),
            'type' => 'tab',
            'options' => array(
                
            'slideshow_select_portfolios' => array(
                'type'  => 'multi-select',
		        'label' => esc_html__('Portfolios', 'elegea'),
		        'desc'  => esc_html__('Select portfolios to display', 'elegea'),
		        'population' => 'posts',
		        'source' => 'fw-portfolio',
		        'prepopulate' => 200,
		        'limit' => 100,
			 ),
                
            'slideshow_page_skin' => array(
                'type' => 'switch',
                'label' => esc_html__('Page Skin', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Dark','elegea'),
                    'value' => 'dark'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Light','elegea'),
                    'value' => 'light'
                ),
                'value' => 'light'
                ),
                
            'slideshow_image_shape' => array(
                'type' => 'radio',
                'label' => esc_html__('Image Shape', 'elegea'),
                'choices' => array (
                    'rectangle' => esc_html__('Rectangle' , 'elegea'),
                    'circle' => esc_html__('Circle' , 'elegea'),
                ),
                'value' => 'rectangle'
                ),
                
            'slideshow_slide_numbers' => array(
                'type' => 'switch',
                'label' => esc_html__('Slide Numbers', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Hide','elegea'),
                    'value' => 'hide'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Show','elegea'),
                    'value' => 'show'
                ),
                'value' => 'show'
                ),
                
           'slideshow_np_links' => array(
                'type' => 'switch',
                'label' => esc_html__('Next/Prev Links', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Hide','elegea'),
                    'value' => 'hide'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Show','elegea'),
                    'value' => 'show'
                ),
                'value' => 'show'
                ),
                
            'slideshow_project_link' => array(
                'type' => 'text',
                'label' => esc_html__('Project Link Text' , 'elegea'),
                'desc' => esc_html__('Enter your background text' , 'elegea'),
                'value' => esc_html__('Take a Look','elegea')
            ),
                
            ),
        
        ),

            
        'portfolio-list' => array(
            'title' => esc_html__('Portfolio List' , 'elegea'),
            'type' => 'tab',
            'options' => array(
            'list_select_portfolios' => array(
                'type'  => 'multi-select',
		        'label' => esc_html__('Portfolios', 'elegea'),
		        'desc'  => esc_html__('Select portfolios to display', 'elegea'),
		        'population' => 'posts',
		        'source' => 'fw-portfolio',
		        'prepopulate' => 200,
		        'limit' => 100,
			 ),
                
            'list_page_skin' => array(
                'type' => 'switch',
                'label' => esc_html__('Page Skin', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Dark','elegea'),
                    'value' => 'dark'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Light','elegea'),
                    'value' => 'light'
                ),
                'value' => 'light'
                ),
                
            ),
        
        ),
            
        'portfolio-fs' => array(
            'title' => esc_html__('Portfolio Slideshow' , 'elegea'),
            'type' => 'tab',
            'options' => array(
            
            'fs_select_portfolios' => array(
                'type'  => 'multi-select',
		        'label' => esc_html__('Portfolios', 'elegea'),
		        'desc'  => esc_html__('Select portfolios to display', 'elegea'),
		        'population' => 'posts',
		        'source' => 'fw-portfolio',
		        'prepopulate' => 200,
		        'limit' => 100,
			 ),

            'fs_project_link' => array (
                'type' => 'text',
                'label' => esc_html__('Project Link Text' , 'elegea'),
                'desc' => esc_html__('Enter your project link text here.' , 'elegea'),
                'value' => esc_html__('View Project' , 'elegea')
            ),
                
            'fs_page_skin' => array(
                'type' => 'switch',
                'label' => esc_html__('Page Skin', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Dark','elegea'),
                    'value' => 'dark'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Light','elegea'),
                    'value' => 'light'
                ),
                'value' => 'light'
                ),
                
            'fs_prev_next' => array (
                'type' => 'switch',
                'label' => esc_html__('Prev/Next Buttons' , 'elegea'),
                'desc' => esc_html__('Switch "no" if you dont want to display prev/next buttons' , 'elegea'),
                'left-choice' => array (
                    'value' => 'no',
                    'label' => esc_html__('No' , 'elegea')
                ),
                
                'right-choice' => array (
                    'value' => 'yes',
                    'label' => esc_html__('Yes' , 'elegea')
                ),
            ),
                

            ),
        
        ),
            
        'portfolio-grid' => array(
            'title' => esc_html__('Portfolio Grid' , 'elegea'),
            'type' => 'tab',
            'options' => array(
            
            'grid_select_portfolios' => array(
                'type'  => 'multi-select',
		        'label' => esc_html__('Portfolios', 'elegea'),
		        'desc'  => esc_html__('Select portfolios to display', 'elegea'),
		        'population' => 'posts',
		        'source' => 'fw-portfolio',
		        'prepopulate' => 200,
		        'limit' => 100,
			 ),
                
            'grid_page_skin' => array(
                'type' => 'switch',
                'label' => esc_html__('Page Skin', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Dark','elegea'),
                    'value' => 'dark'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Light','elegea'),
                    'value' => 'light'
                ),
                'value' => 'light'
                ),
                
            'grid_headline' => array(
                'type' => 'textarea',
                'label' => esc_html__('Headline', 'elegea'),
                'desc' => esc_html__('Enter your headline for this page.' , 'elegea')
                
                ),
                
            'grid_sub_text' => array(
                'type' => 'textarea',
                'label' => esc_html__('Sub Text', 'elegea'),
                'desc' => esc_html__('Enter your subtitle for this page.' , 'elegea')
                
                ),
            ),
        
        ),
            
        'portfolio-carousel' => array(
            'title' => esc_html__('Portfolio Carousel' , 'elegea'),
            'type' => 'tab',
            'options' => array(
            
            'carousel_select_portfolios' => array(
                'type'  => 'multi-select',
		        'label' => esc_html__('Portfolios', 'elegea'),
		        'desc'  => esc_html__('Select portfolios to display', 'elegea'),
		        'population' => 'posts',
		        'source' => 'fw-portfolio',
		        'prepopulate' => 200,
		        'limit' => 100,
			 ),
                
            'carousel_page_skin' => array(
                'type' => 'switch',
                'label' => esc_html__('Page Skin', 'elegea'),
                'left-choice' => array(
                    'label' => esc_html__('Dark','elegea'),
                    'value' => 'dark'
                ),
                'right-choice' => array(
                    'label' => esc_html__('Light','elegea'),
                    'value' => 'light'
                ),
                'value' => 'light'
                ),
                
           
                
                
           
                
            ),
        
        ),
            


		),

	),
);
