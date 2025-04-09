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
        <h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
        <div class="three-columns">
            <div class="matchmaking-modal">
                <div class="mm-modal-button-wrapper">
                        <img class="animate__animated animate__zoomInUp animate__delay-2s" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent.png" alt="cartoon KT holding a red heart" />
                        <span>
                            <span class="mm-intro">
                                <span class="speech animate__animated animate__bounceInLeft animate__delay-3s">
                                    Are you serious about finding a partner?
                                    <div class="button-wrapper">
                                        <span></span>
                                        <div class="animate__animated animate__fadeIn animate__delay-4s">
                                            <button aria-label="open the modal Matchmaking" class="mm-modal-button" aria-controls="mm-modal" aria-expanded="false">Yes</button>
                                        </div>
                                    </div>
                                </span>
                            </span>
                        </span>
                </div>
                <div id="mmModal" class="mm-modal" aria-hidden="true">
                    <div id="mmOverlay" class="overlay"></div>
                    <button class="mm-modal-button-close" aria-controls="mm-modal" aria-label="Close the modal Matchmaking">
                        <svg width="30" height="30" aria-hidden="true" focusable="false" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 125"><g transform="translate(0,-952.36218)"><path style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#FFFFFF;enable-background:accumulate;" d="m 49.999998,958.36218 c -24.27092,0 -44,19.71901 -44,44.00002 0,24.2715 19.7285,44 44,44 24.28103,0 44.000004,-19.7291 44.000004,-44 0,-24.28051 -19.719544,-44.00002 -44.000004,-44.00002 z m 0,4.00001 c 22.11954,0 40.000004,17.8805 40.000004,40.00001 0,22.1091 -17.881034,40 -40.000004,40 -22.1085,0 -40,-17.8915 -40,-40 0,-22.11901 17.89093,-40.00001 40,-40.00001 z" fill="#FFFFFF" fill-opacity="1" fill-rule="evenodd" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"/><path style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#FFFFFF;enable-background:accumulate;" d="m 34.764998,985.35249 a 2.0002,2.0002 0 0 0 -1.1875,3.4375 l 13.5625,13.59381 -13.5625,13.5624 a 2.0108526,2.0108526 0 0 0 2.84375,2.8438 l 13.59375,-13.5937 13.5625,13.5937 a 2.0108526,2.0108526 0 0 0 2.84375,-2.8438 l -13.59375,-13.5624 13.59375,-13.59381 a 2.0002,2.0002 0 0 0 -1.46875,-3.4375 2.0002,2.0002 0 0 0 -1.375,0.5938 l -13.5625,13.5625 -13.59375,-13.5625 a 2.0002,2.0002 0 0 0 -1.4375,-0.5938 2.0002,2.0002 0 0 0 -0.21875,0 z" fill="#FFFFFF" fill-opacity="1" fill-rule="evenodd" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"/></g></svg>
                            <span class="screen-reader-text">Close the modal Matchmaking</span>
                    </button>
                            
                    <div class="image-and-form">
                        <img class="modal-kt" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent.png" alt="cartoon KT holding a red heart" /> 
                        <?php echo do_shortcode("[acfe_form name='matchmaking']"); ?> 
                        <div class="form-right"></div>
                    </div>
          
                </div>
            </div>
            <?php
            $leftColumn = get_field('left_column');
            
            if( $leftColumn ): ?>

            <div class="one-column bg-image">
                <img src="<?php echo esc_url($leftColumn['background_image']['url']) ?>" alt="<?php echo esc_attr( $leftColumn['background_image']['alt'] ); ?>" width="<?php echo esc_attr( $leftColumn['background_image']['width'] ); ?>" height="<?php echo esc_attr( $leftColumn['background_image']['height'] ); ?>" >
   
                <h2>
                    <a href="<?php echo esc_url( $leftColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $leftColumn['link']['target'] ); ?>">
                       <?php echo esc_html( $leftColumn['link']['title'] ); ?>
                    </a>
                </h2>

                <!-- <div class="matchmaking-modal">
                    <div class="mm-modal-button-wrapper">
                            <img class="animate__animated animate__zoomInUp animate__delay-2s" src="<?php // echo get_template_directory_uri(); ?>/images/KT-heart-transparent.png" alt="cartoon KT holding a red heart" />
                            <span>
                                <span class="mm-intro">
                                    <span class="speech animate__animated animate__bounceInLeft animate__delay-3s">
                                        Are you serious about finding a partner?
                                    </span>
                                    <span class="yes-container animate__animated animate__fadeIn animate__delay-4s">
                                        <button class="mm-modal-button" aria-controls="mm-modal" aria-expanded="false">Yes</button>
                                    </span>
                                </span>

                                <div id="mmModal" class="mm-modal" aria-hidden="true">
                                    <?php // echo do_shortcode("[acfe_form name='matchmaking']"); ?>  
                                </div>
                            </span>
                    </div>
                </div> -->

            </div>
            <?php endif; ?>
            <div class="event-column one-column">
                <section>
                    <h2>Community Events</h2>

                    <?php
                        $eventsquery = new WP_Query( array( 
                            'post_type' => 'event',
                            'post_status' => 'publish',
                            'posts_per_page' => -1 
                        ) );
                    ?>

           

                    <div class="splide desktop-scroll" aria-label="Community Events">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php
                                while ( $eventsquery->have_posts() ) :
                                    $eventsquery->the_post();
                                    $vqtEvent = get_field('vqt_event');
                                ?>
                                <li class="splide__slide"> 
                                    <a class="event-card <?php if($vqtEvent): ?>vqt-event<?php endif; ?>" href="<?php echo esc_html( get_field('event_link') ); ?>" target="_blank">
                                        <?php
                                            if( get_field('vqt_event') ) {
                                                // Do something.
                                                echo '<span class="capsule">VQT Event</span>';
                                            }
                                        ?>
                                        <span class="event-meta">
                                            <span><?php echo esc_html( get_field('event_date') ); ?></span>
                                            <span>
                                                <?php echo esc_html( get_field('event_time') ); ?>
                                                <?php if( get_field('event_end_time') ): ?>
                                                     - <?php echo esc_html( get_field('event_end_time') ); ?>
                                                <?php endif; ?>  
                                            </span>
                                        </span>
                                        <h3><?php echo esc_html( get_field('event_title') ); ?></h3>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>    
                            </ul>
                        </div>
                    </div>

                    <ul class="events-mobile list-no-style">
                        <?php
                        while ( $eventsquery->have_posts() ) :
                            $eventsquery->the_post();
                            $vqtEvent = get_field('vqt_event');
                        ?>
                        <li class=""> 
                            <a class="event-card <?php if($vqtEvent): ?>vqt-event<?php endif; ?>" href="<?php echo esc_html( get_field('event_link') ); ?>" target="_blank">
                                <?php
                                    if( get_field('vqt_event') ) {
                                        // Do something.
                                        echo '<span class="capsule">VQT Event</span>';
                                    }
                                ?>
                                <span class="event-meta">
                                    <span><?php echo esc_html( get_field('event_date') ); ?></span>
                                    <span>
                                        <?php echo esc_html( get_field('event_time') ); ?>
                                        <?php if( get_field('event_end_time') ): ?>
                                                - <?php echo esc_html( get_field('event_end_time') ); ?>
                                        <?php endif; ?>  
                                    </span>
                                </span>
                                <h3><?php echo esc_html( get_field('event_title') ); ?></h3>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>    
                    </ul>

                    <div class="button-center button-mobile">
                        <a class="button button-reverse button-se" href="/submit-an-event">Event Submissions</a>
                    </div>
                </section>
            </div>
            <?php
            $rightColumn = get_field('right_column');
            
            if( $rightColumn ): ?>

            <div class="bg-image one-column">
                <img src="<?php echo esc_url($rightColumn['background_image']['url']) ?>" alt="<?php echo esc_attr( $rightColumn['background_image']['alt'] ); ?>" width="<?php echo esc_attr( $rightColumn['background_image']['width'] ); ?>" height="<?php echo esc_attr( $rightColumn['background_image']['height'] ); ?>" >

                <h2>
                    <a href="<?php echo esc_url( $rightColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $rightColumn['link']['target'] ); ?>">
                        <?php echo esc_html( $rightColumn['link']['title'] ); ?>
                    </a>
                </h2>

            </div>
            <?php endif; ?>
        </div>

        <div class="wrapper">
            <div class="button-center button-desktop">
                <a class="button button-reverse button-se" href="/submit-an-event">Event Submissions</a>
            </div>
    
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page-front' );

            endwhile; // End of the loop.
            ?>

        </div>

  

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
