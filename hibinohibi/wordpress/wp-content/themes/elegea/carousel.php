	<?php /* Template Name: Portfolio Carousel */ ?>

	<?php get_header(); ?>

	<?php 

$portfolios = elegea_customize("carousel_select_portfolios");
?>


	<div class="fullscreen <?php if ( elegea_customize('carousel_page_skin') === 'dark') : echo 'fs-dark-skin'; endif; ?>">


	    <div class="portfolios-carousel">
	        <div class="swiper-wrapper">
	            <?php if (! empty ($portfolios)): 
	             foreach ($portfolios as $key => $portfolio_item) : ?>
                <div class="swiper-slide c-portfolio">
                <div class="c-portfolio-meta">
                    <div class="c-date"><?php echo elegea_page_option($portfolio_item, 'project_date'); ?></div>
                    <div class="c-work"><?php echo elegea_page_option($portfolio_item, 'project_work'); ?></div>
                    <div class="c-image"><img class="c-img" src="<?php echo get_the_post_thumbnail_url($portfolio_item) ?>"></div>
                    <div class="c-title"><h4><?php echo get_the_title($portfolio_item) ?></h4></div>
                    <div class="c-summary"><?php echo elegea_page_option($portfolio_item, 'project_summary'); ?> </div>
                    <a class="c-view-project ulink" href="<?php echo esc_attr(get_the_permalink($portfolio_item)) ?>"><?php echo esc_html('VIEW PROJECT' , 'elegea') ?></a>
                </div>
                </div>
	            <?php endforeach; 
	           endif; ?>
	        </div>
            <div class="carousel-progress"></div>
	    </div>
	</div>
	<?php get_footer('fullscreen'); ?>
