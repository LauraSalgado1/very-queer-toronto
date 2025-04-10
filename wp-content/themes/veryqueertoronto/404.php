<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package veryqueertoronto
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="page-container wrapper">

			<section class="error-404 not-found">
				<header class="page-header">
					<div>
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'veryqueertoronto' ); ?></h1>
					</div>
					<div>
					<div>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-404.svg" />
					</div>
					</div>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'veryqueertoronto' ); ?></p>
					<a href="/" class="button">VQT Events Home</a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>

	</main><!-- #main -->

<?php
get_footer();
