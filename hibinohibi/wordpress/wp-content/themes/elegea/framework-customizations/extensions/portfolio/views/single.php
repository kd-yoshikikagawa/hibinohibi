<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 */

$fw_ext_projects_gallery_image = fw()->extensions->get( 'portfolio' )->get_config( 'image_sizes' );
$fw_ext_projects_gallery_image = $fw_ext_projects_gallery_image['gallery-image'];


$class = array();

$categories2 = wp_get_post_terms( get_the_ID(), 'fw-portfolio-category', array("fields" => "all"));
foreach($categories2 as $category) :
endforeach;

			
		
get_header(); ?>

<div id="main-content" class="main-content">

    <?php
		if ( is_front_page() && fw_theme_has_featured_posts() ) {
			// Include the featured content template.
			get_template_part( 'featured-content' );
		}
		?>
    <div id="primary" class="portfolio-content-area">
        <div id="content" class="site-content project-content" role="main">

            <?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="portfolio-header <?php echo esc_attr( implode( " ", $class ) ); ?>">


                    <div class="portfolio-thmb">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>">

                    </div>
                    <div class="portfolio-meta lax" data-lax-preset="lazy-200">
                        <div class="project-work">

                            <?php echo elegea_page_option(get_the_ID() , 'project_work') ?>
                        </div>
                        <div class="project-title">

                        <?php the_title( '<h1 class="big-title portfolio-title">', '</h1>' ); ?>
</div>
                        <div class="project-meta-box project-summary">
                            <?php echo elegea_page_option(get_the_ID() , 'project_summary') ?>
                        </div>

                        <div class="project-meta-box project-client">

                            <strong><?php echo esc_html('CLIENT : ' , 'elegea') ?></strong><?php echo elegea_page_option(get_the_ID() , 'project_client') ?>
                        </div>

                        <div class="project-meta-box project-year">

                            <strong><?php echo esc_html('YEAR :' , 'elegea') ?> </strong><?php echo elegea_page_option(get_the_ID() , 'project_date') ?>
                        </div>

                    </div>
                    <?php
							if( function_exists('fw_ext_feedback') ) {
								fw_ext_feedback();
							}
							?>
                </header>
                <!-- .entry-header -->

                <div class="portfolio-content">
                    <div class="entry-content">
                        <?php the_content();	?>
                    </div>

                    <?php
							$thumbnails = fw_ext_portfolio_get_gallery_images();

							$captions = array();
							if ( ! empty( $thumbnails ) ) :
								?>

                    <div class="row portfolio-images-vertical">

                        <?php $gallery = fw_ext_portfolio_get_gallery_images(); 
                    
                    if ( ! empty( $gallery ) ) { ?>

                        <?php foreach( $gallery as $image ) : ?>
                        <a class="portfolio-gallery-link" href="<?php echo esc_attr($image['url']) ?>">
                            <img src="<?php echo esc_attr($image['url']) ?>" class="portfolio-gallery-image" />
                        </a>
                        <?php endforeach ?>

                        <?php } ?>
                    </div>

                    <?php endif ?>

                    <!-- .entry-content -->
                </div>
                <!-- .entry-content -->
            </article><!-- #post-## -->
            <?php endwhile; ?>
            <div class="np-project">
                <?php $prev_post = get_previous_post();
                $next_post = get_next_post();
                        if (!empty( $prev_post )): ?>
                <a href="<?php echo esc_url(get_the_permalink($prev_post)) ?>">
                    <div class="prev-project <?php if (empty ($next_post)) : echo 'width100' ; endif; ?>">
                        <div class="np-overlay"></div>
                        <div class="np-overlay op5"></div>

                        <div class="np-project-go">
                            <p><?php echo esc_html('PREV' , 'elegea') ?></p>
                            <h1 class="np-project-title"><?php echo get_the_title($prev_post); ?></h1>
                        </div>

                        <div class="np-project-image">
                            <img class="np-project-img" src="<?php echo get_the_post_thumbnail_url($prev_post) ?>">
                        </div>

                    </div>
                </a>
                <?php endif ?>
                <?php
                        if (!empty( $next_post )): ?>
                <a href="<?php echo esc_url(get_the_permalink($next_post)) ?>">
                    <div class="next-project <?php if (empty ($prev_post)) : echo 'width100' ; endif; ?>">
                        <div class="np-overlay"></div>
                        <div class="np-overlay op5"></div>

                        <div class="np-project-go">
                            <p><?php echo esc_html('NEXT' , 'elegea') ?></p>
                            <h1 class="np-project-title"><?php echo get_the_title($next_post); ?></h1>
                        </div>

                        <div class="np-project-image">
                            <img class="np-project-img" src="<?php echo get_the_post_thumbnail_url($next_post) ?>">
                        </div>

                    </div>
                </a>
                <?php endif ?>







            </div>




        </div>
        <!-- #content -->
    </div>
    <!-- #primary -->
</div><!-- #main-content -->

<?php 

get_footer();
