	<?php /* Template Name: Portfolio Horizontal */ ?>

	<?php get_header(); ?>

	<?php 

$portfolios = elegea_customize("slideshow_select_portfolios");

$slide_id = uniqid();

?>
	<div class="pf-horizontal fullscreen <?php if ( elegea_customize('slideshow_page_skin') === 'dark') : echo 'fs-dark-skin'; endif; ?>">
	    <div class="portfolio-showcase">
	        <div class="portfolio-swiper">
	            <div class="swiper-wrapper">
	                <?php if (! empty ($portfolios)) : 
                        foreach ($portfolios as $key => $portfolio_item) : ?>
	                <div class="swiper-slide">
	                    <div class="single-slide">
	                        <div class="single-slide-image single-slide-image-<?php echo elegea_customize('slideshow_image_shape'); ?>">
	                            <img class="single-slide-img" src="<?php echo get_the_post_thumbnail_url($portfolio_item) ?>">
	                            <div class="take-a-look">
	                                <a class="ulink" href="<?php echo get_the_permalink($portfolio_item); ?>"><?php echo elegea_customize('slideshow_project_link'); ?></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <?php endforeach ?>
	                <?php endif ?>
	            </div>
	        </div>
	        <div class="titles-swiper front-titles">
	            <div class="swiper-wrapper">
	                <?php if (! empty ($portfolios)) : 
                        foreach ($portfolios as $key => $portfolio_item) : ?>
	                <div class="swiper-slide">
	                    <div class="head-text">
	                        <div class="single-slide-heading front-text"><?php echo get_the_title($portfolio_item); ?></div>
	                    </div>
	                </div>
	                <?php endforeach ?>
	                <?php endif ?>

	            </div>
	        </div>
	        <div class="titles-swiper back-titles">
	            <div class="swiper-wrapper">
	                <?php if (! empty ($portfolios)) : 
                        foreach ($portfolios as $key => $portfolio_item) : ?>
	                <div class="swiper-slide">
	                    <div class="head-text">
	                        <div class="single-slide-heading back-text"><?php echo get_the_title($portfolio_item); ?></div>
	                    </div>
	                </div>
	                <?php endforeach ?>
	                <?php endif ?>

	            </div>
	        </div>
	    </div>
	    <?php if (elegea_customize('slideshow_slide_numbers') !== 'hide') :?>
	    <div class="slider-navigation-found">
	        <div class="slide-index-count">
	            <div class="current">
	            </div>
	            <span class="line"></span>
	            <div class="total">
	                <p></p>
	            </div>
	        </div>
	        <?php endif; ?>
	        <?php if (elegea_customize('slideshow_np_links') !== 'hide') :?>
	        <div class="slide-nav">
	            <div class="slide-prev">
	                <a class="ulink"><?php echo esc_html__('PREV' , 'elegea') ?></a>
	            </div>
	            <div class="slide-next">
	                <a class="ulink"><?php echo esc_html__('NEXT' , 'elegea') ?></a>
	            </div>
	        </div>
	        <?php endif; ?>
	    </div>

	</div>




	<?php get_footer('fullscreen'); ?>
