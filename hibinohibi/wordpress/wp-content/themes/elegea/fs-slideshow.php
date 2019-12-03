	<?php /* Template Name: Portfolio Slideshow */ ?>

	<?php get_header(); ?>

	<?php 

$portfolios = elegea_customize("fs_select_portfolios");
?>


	<div class="fullscreen <?php if ( elegea_customize('fs_page_skin') === 'dark') : echo 'fs-dark-skin'; endif; ?>">
        
        
        <div class="portfolios-fs">
            <div class="swiper-wrapper">
              <?php if (! empty ($portfolios)): 
	             foreach ($portfolios as $key => $portfolio_item) : ?>
            <div class="swiper-slide fs-portfolio-item">
                <div class="fs-portfolio-meta">
                <div class="fs-portfolio-title">
                    <h1><?php echo get_the_title($portfolio_item) ?></h1>
                </div>
                    <div class="fs-portfolio-link"><a href="<?php echo get_the_permalink($portfolio_item) ?>"><?php echo elegea_customize('fs_project_link') ?></a></div>
                    </div>
                <div class="fs-portfolio-image">
                    <img src="<?php echo get_the_post_thumbnail_url($portfolio_item) ?>">
                </div>
                </div>
   <?php endforeach; 
	           endif; ?>
        </div>
            
        </div>
            <div class="fs-slide-nav">
	            <div class="arrow arrow-left slide-prev">
	                <a class="ulink"><?php echo esc_html__('Prev' , 'elegea') ?></a>
	            </div>
	            <div class="arrow arrow-right slide-next">
	                <a class="ulink"><?php echo esc_html__('Next' , 'elegea') ?></a>
	            </div>
	        </div>

       
	</div>
	<?php get_footer('fullscreen'); ?>
