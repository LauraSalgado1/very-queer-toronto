<?php
/**
 * Template Name: Matchmaking Page Template 
 *
 * @package veryqueertoronto
 */

get_header();
?>

<?php 
	$sectionOneHeading = get_field('section_one_heading');
	$sectionOneParagraphOne = get_field('section_one_paragraph_one');
	$sectionOneParagraphTwo = get_field('section_one_paragraph_two');
	$sectionTwoHeading = get_field('section_two_heading');
	$sectionThreeHeading = get_field('section_three_heading');
	$sectionThreeParagraph = get_field('section_three_paragraph');
    $form = get_field('form');
?>

	<main id="primary" class="site-main">
		<div class="page-form page-container wrapper">
			<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
			<div class="page-header">
				<div>
					<?php the_title( '<h1>', '</h1>' ); ?>
				</div>
			</div>

					
            <section class="section-one">
                <?php if($sectionOneHeading): ?>
                    <h2><?php echo esc_html( $sectionOneHeading ); ?></h2>
                <?php endif; ?>

                <div class="intro-paragraphs">
                    <?php if($sectionOneParagraphOne): ?>
                        <div>
                            <p><?php echo $sectionOneParagraphOne; ?></p>
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/icon-heart-hands.svg" alt="heart hands" width="300" height="300" loading="lazy" />
                        </div>
                    <?php endif; ?>

                    <?php if($sectionOneParagraphTwo): ?>
                        <div>
                           <img class="" src="<?php echo get_template_directory_uri(); ?>/images/icon-rainbow.svg" alt="rainbow" width="300" height="300" loading="lazy" />
                            <p><?php echo $sectionOneParagraphTwo; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
		
            <section class="section-two">
                <?php if($sectionTwoHeading): ?>
                    <h2><?php echo esc_html( $sectionTwoHeading ); ?></h2>
                <?php endif; ?>

                <?php if( have_rows('list_item') ): ?>
                        <ul class="list-items list-no-style">
                            <?php while( have_rows('list_item') ): the_row(); ?>
                            <li>
                                <div class="list-item-header">
                                    <svg fill="#c29f51" aria-hidden="true" focusable="false" width="50" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0">
                                        <path d="m97.059 25.199c0 2.4102-0.94141 4.6758-2.6484 6.3828l-49.605 49.605c-1.707 1.707-3.9688 2.6484-6.3828 2.6484-2.1875 0-4.3008-0.79297-5.9453-2.2344l-26.453-23.156c-3.7461-3.2773-4.1289-8.9922-0.85156-12.734 1.7109-1.9648 4.1953-3.0898 6.8008-3.0898 2.1836 0 4.293 0.79297 5.9414 2.2344l20.102 17.582 43.633-43.625c1.707-1.707 3.9688-2.6484 6.3828-2.6484 2.4102 0 4.6758 0.94141 6.3828 2.6484 1.707 1.707 2.6484 3.9688 2.6484 6.3867z"/>
                                    </svg>
                                    <h3><?php echo acf_esc_html( get_sub_field('heading') ); ?></h3>
                                </div>
                                <p><?php  echo acf_esc_html( get_sub_field('paragraph') ); ?></p>
                                <?php // Loop over sub repeater rows.
                                    if( have_rows('bullet_points') ):
                                        echo '<ul class="bullet-points">';
                                        while( have_rows('bullet_points') ) : the_row();

                                            // Get sub value.
                                            $boldText = get_sub_field('bold_text');
                                            $regularText = get_sub_field('regular_text');

                                            echo '<li><span class="bold">'.$boldText.'</span> <span class="regular">'.$regularText.'</span></li>';

                                        endwhile;
                                        echo '</ul>';
                                    endif;
                                ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </section>


			<div class="form-row form-with-payment">
				<div class="half-info">
		            <?php if($sectionThreeHeading): ?>
                        <h2><?php echo esc_html( $sectionThreeHeading ); ?></h2>
                    <?php endif; ?>

                    <?php if($sectionThreeParagraph): ?>
                        <div>
                            <p><?php echo $sectionThreeParagraph; ?></p>
                        </div>
                    <?php endif; ?>
				</div>

				<div class="half-form">
                    <?php if($form): ?>
                    <div class="section-three-form">
                        <?php  echo do_shortcode('[acfe_form ID="'.$form[0].'"]'); ?>
                    </div>
                    <?php endif; ?>
				</div>
			</div>


		</div>
	</main>

<?php
get_sidebar();
get_footer();
