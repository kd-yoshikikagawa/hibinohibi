	<?php /* Template Name: Portfolio List */ ?>

	<?php get_header(); ?>

	<?php 

$portfolios = elegea_customize("list_select_portfolios");
$image_id = uniqid('image_');
$index = 0;
?>


	<div class="fullscreen list-fs <?php if ( elegea_customize('list_page_skin') === 'dark') : echo 'dark-skin'; endif; ?>">
	    <div class="portfolios-list">
	        <ul class="p-list">
	            <?php if (! empty ($portfolios)): 
	             foreach ($portfolios as $key => $portfolio_item) : ?>
	            <li style="background-image: url(<?php echo get_the_post_thumbnail_url($portfolio_item) ?>)" class="p-list-item">
	                <a class="p-list-item-link" href="<?php echo get_the_permalink($portfolio_item) ?>" data-img=".<?php echo esc_attr($image_id . '_' . ($key + 1)); ?>">
	                    <h1 class="big-title p-list-title" data-index="<?php echo esc_attr($key + 1) ?>"><?php echo get_the_title($portfolio_item); ?></h1>
	                </a>
	            </li>
	            <?php endforeach; 
	           endif; ?>
	        </ul>

	    </div>

	    <div class="p-list-images">
	        <?php if (! empty ($portfolios)):
	      foreach ($portfolios as $key => $portfolio_item) : ?>
	        <div class="p-list-image <?php echo esc_attr($image_id . '_' . ($key + 1)); ?>">
	            <img src="<?php echo get_the_post_thumbnail_url($portfolio_item) ?>">
	        </div>
	        <?php endforeach;
	        endif; ?>

	    </div>
	</div>

	<?php get_footer('fullscreen'); ?>
