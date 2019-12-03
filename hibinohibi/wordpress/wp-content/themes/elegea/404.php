<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Elegea
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
                <div class="page-content">
				<header class="page-header">
					<h1 class="error-title"><?php esc_html_e( '404', 'elegea' ); ?></h1>
					<h2 class="404-title"><?php esc_html_e( 'Not Found', 'elegea' ); ?></h2>
				</header><!-- .page-header -->

				
					<p><?php esc_html_e( 'It looks like nothing was found at this location. You can search something else.', 'elegea' ); ?></p>

					<?php
					get_search_form();

					?>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
