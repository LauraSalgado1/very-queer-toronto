<?php
/**
 * Template Name: Form Page Template 
 *
 * @package veryqueertoronto
 */

get_header();
?>

<?php 
	$topIcon = get_field('top_icon');
	$secondHeading = get_field('second_heading');
	$formHeading = get_field('form_heading');
	$formParagraph = get_field('form_paragraph');
	$formIcon = get_field('form_icon');
	$form = get_field('form');
	$stepOneHeading = get_field('step_one_title');
	$stepTwoHeading = get_field('step_two_title');
	$paypal = get_field('paypal_embed_code');
	$bottomParagraph = get_field('bottom_paragraph');
	$emailButton = get_field('email_vqt_button');
?>

	<main id="primary" class="site-main vqt-page-template">
		<div class="page-form page-container wrapper">
			<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
			<div class="page-header">
				<div>
					<?php the_title( '<h1>', '</h1>' ); ?>
				</div>
				
				<div class="header-icon">
					<?php if( $topIcon ) {
							echo wp_get_attachment_image( $topIcon['ID'], array('300', '300'),"", array( "class" => "icon" ) );
						}
					?>
				</div>
			</div>

			<?php if($secondHeading): ?>		
				<div class="">
					<h2><?php echo esc_html( $secondHeading ); ?></h2>
				</div>
			<?php endif; ?>

			<?php
				if( have_rows('half_width_details') ): ?>
					<div class="options">
						<?php while( have_rows('half_width_details') ): the_row(); ?>
						<div>
								<h3><?php echo acf_esc_html( get_sub_field('heading') ); ?></h3>
								<p><?php  echo acf_esc_html( get_sub_field('paragraph') ); ?></p>
						</div>
						<?php endwhile; ?>
					</div>
			<?php endif; ?>

			<div class="form-row form-with-payment">
				<div class="half-info">
					<?php if($formHeading): ?>	
						<h2><?php echo esc_html( $formHeading ); ?></h2>
					<?php endif; ?>

					<?php if($formParagraph): ?>	
						<p><?php echo esc_html( $formParagraph ); ?></p>
					<?php endif; ?>

					<?php 
					if( $formIcon ) {
						echo wp_get_attachment_image( $formIcon['ID'], array('300', '300'),"", array( "class" => "icon" ) );
					}
					?>
				</div>

				<div class="half-form">
					<?php if($stepOneHeading): ?>
						<h3><?php echo esc_html( $stepOneHeading ); ?></h3>
					<?php endif; ?>

					<?php if($form): ?>
						<?php  echo do_shortcode('[acfe_form ID="'.$form[0].'"]'); ?>
					<?php endif; ?>

					<?php if($stepTwoHeading): ?>
						<h3><?php echo esc_html( $stepTwoHeading ); ?></h3>
					<?php endif; ?>

					<div class="vqt-paypal-wrapper">
						<?php if($paypal): ?>
							<?php echo $paypal; ?>
						<?php endif; ?>
					</div>

					<?php if($bottomParagraph): ?>
						<?php echo $bottomParagraph; ?>
					<?php endif; ?>

					<?php if($emailButton): ?>
						<span class="email-link">
							<a class="button" href="">
								<span class="vqt-email">vqtev<span>johnny</span>ents@gmail.<span>june.</span><span>com</span></span>
							</a>  
						</span>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_sidebar();
get_footer();
