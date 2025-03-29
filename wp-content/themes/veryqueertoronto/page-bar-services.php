<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package veryqueertoronto
 */

get_header();
?>

	<main id="primary" class="site-main">


		<div class="page-form page-container wrapper">
				<div class="page-header">
					<div>
						<h1>Bar Services</h1>
					</div>
					<div>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-bar.svg" />
					</div>
				</div>
				<div class="">
					<h2>From intimate gatherings to large-scale events, we offer fully customizable bar solutions:</h2>
				</div>
				<div class="options">
					<div>
						<h3>Full Bar Service</h3>
						<p>We handle everything, including alcohol supply, setup, and expert bartenders.</p>
					</div>
					<div>
						<h3>Bartender-Only Service</h3>
						<p>Need professional bar staff to run the bar? We bring the skills, you provide the drinks.</p>
					</div>
					<div>
						<h3>Customized Cocktail Menus</h3>
						<p>Impress your guests with signature drinks crafted to match your event’s vibe.</p>
					</div>
					<div>
						<h3>Flawless Execution</h3>
						<p>Our experienced bartenders ensure smooth service, great drinks, and a fantastic guest experience.</p>
					</div>
				</div>
				<div class="form-row">
					<div class="half-info">
						<h2>Tell us more about what you need!</h2>
						<p>Fill out the form, and let’s create a service package that fits your event or space perfectly.</p>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-cheers.svg" />
					</div>
					<div class="half-form">
						<?php  echo do_shortcode('[acfe_form ID="149"]'); ?>
						<?php // echo do_shortcode('[acfe_form ID="145"]'); ?>
					</div>
				</div>
		</div>

		<?php
			//while ( have_posts() ) :
				//the_post();

				//get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
					//comments_template();
				//endif;

			//endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
