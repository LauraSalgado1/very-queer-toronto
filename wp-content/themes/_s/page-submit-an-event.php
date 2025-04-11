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
						<h1>Submit An Event</h1>
					</div>
					<div>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-calendar.svg" />
					</div>
				</div>
				<div class="">
					<h2>Promote your event for only $10</h2>
				</div>

				<div class="form-row form-with-payment">
					<div class="half-info">
						<p>Fill out the form, submit your payment, and let’s bring the community together.</p>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-people.svg" />
					</div>
					<div class="half-form">
                        <h3>Step 1: Event Details</h3>
						<?php  echo do_shortcode('[acfe_form ID="87"]'); ?>
                        <h3>Step 2: Payment</h3>
                        <div class="vqt-paypal-wrapper">
                            <script src="https://www.paypal.com/sdk/js?client-id=BAA-tDHQFBGqBbC620fE8Zx4xz5NAGoGVr54t6BEKS53Gn9yOFzwk1v2HylD3F4wXRIt-zj-BSiBOm1nt4&components=hosted-buttons&disable-funding=venmo&currency=CAD"></script>
                                <div id="paypal-container-8YFYDGGMNG9P6"></div>
                                <script>
                                paypal.HostedButtons({
                                    hostedButtonId: "8YFYDGGMNG9P6",
                                }).render("#paypal-container-8YFYDGGMNG9P6")
                            </script>
                        </div>
                        <p>Once payment is received, your event will be reviewed before it is promoted on the site.</p>
                        <p>Any questions? Please reach out at:</p><a class="button" href="mailto:vqtevents@gmail.com">vqtevents@gmail.com</a>  
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
