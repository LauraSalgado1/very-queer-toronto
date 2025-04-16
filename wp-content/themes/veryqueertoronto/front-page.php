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
        <h1 class="screen-reader-text">VQT Events – Very Queer Toronto Events – Queer events in Toronto</h1>
        <div class="matchmaking-modal">
            <div class="mm-modal-button-wrapper">
                <img class="animate__animated animate__zoomInUp animate__delay-2s" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent-small.png" alt="Cartoon KT holding a red heart" width="110" height="110" loading="lazy" />
                <span>
                    <span class="mm-intro">
                        <span class="speech animate__animated animate__jackInTheBox animate__delay-3s">
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
                    <svg width="30" height="30" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125" x="0px" y="0px"><path d="m64.14,50l23.66-23.66c3.91-3.91,3.91-10.24,0-14.14-3.91-3.9-10.24-3.9-14.14,0l-23.66,23.66L26.34,12.19c-3.91-3.91-10.24-3.91-14.14,0-3.9,3.91-3.9,10.24,0,14.14l23.66,23.66-23.66,23.66c-3.91,3.91-3.91,10.24,0,14.14,3.91,3.9,10.24,3.9,14.14,0l23.66-23.66,23.66,23.66c3.91,3.91,10.24,3.91,14.14,0,3.9-3.91,3.9-10.24,0-14.14l-23.66-23.66Z" stroke-width="0"/></svg>
                    <span class="screen-reader-text">Close the modal Matchmaking</span>
                </button>
                        
                <div class="image-and-form">
                    <img loading="lazy" class="modal-kt kt-mobile" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent-small.png" alt="Cartoon KT holding a red heart" width="110" height="110" />
                    <img loading="lazy" class="modal-kt kt-desktop" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent-large.png" alt="Cartoon KT holding a red heart" width="200" height="202" /> 
                    <?php echo do_shortcode("[acfe_form name='matchmaking']"); ?> 
                    <div class="form-right"></div>
                </div>
            </div>
        </div>
        <div class="three-columns">

            <?php
            $leftColumn = get_field('left_column');
            
            if( $leftColumn ): ?>

            <div class="one-column bg-image left-column">
                <?php 
                    $leftBg = $leftColumn['background_image'];
                    echo wp_get_attachment_image( $leftBg['id'], array('639', '876'), "" );
                ?>

                <h2>
                    <a href="<?php echo esc_url( $leftColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $leftColumn['link']['target'] ); ?>">
                       <?php echo esc_html( $leftColumn['link']['title'] ); ?>
                    </a>
                </h2>

            </div>
            <?php endif; ?>
            <div class="event-column one-column">
                <section>
                    <h2>Community Events</h2>

                    <?php
                        $today = date( 'Ymd' );
                        $eventsquery = new WP_Query( array( 
                            'post_type' => 'event',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'meta_key'  => 'event_date',
                            'orderby'   => 'meta_value_num',
                            'order'     => 'ASC', 
                            'meta_query' => array(
                                array(
                                    'key'     => 'event_date',
                                    'compare' => '>=',
                                    'value'   => $today,
                                ),
                            ),
                        ) );
                    ?>

                            
                    <div class="animate__animated animate__fadeIn animate__delay-2s splide desktop-scroll" aria-label="Community Events">
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

                    <ul class="events-desktop-reduced-motion list-no-style">
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

            <div class="bg-image one-column right-column">
                <?php 
                    $rightBg = $rightColumn['background_image'];
                    echo wp_get_attachment_image( $rightBg['id'], array('639', '876'), "" );
                ?>

                <h2>
                    <a href="<?php echo esc_url( $rightColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $rightColumn['link']['target'] ); ?>">
                        <?php echo esc_html( $rightColumn['link']['title'] ); ?>
                    </a>
                </h2>

            </div>
            <?php endif; ?>
        </div>

        <div class="mobile-cards">
            <section>
            
                <?php 
                if( $leftColumn ): ?>
                    <a class="mobile-card" href="<?php echo esc_url( $leftColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $leftColumn['link']['target'] ); ?>">   
                        <?php echo wp_get_attachment_image( $leftBg['id'], array('200', '200'), "" ); ?>
                        <div class="title-wrapper">
                            <h2><?php echo esc_html( $leftColumn['link']['title'] ); ?></h2>
                        </div>
                    </a>
                 <?php endif; ?>

                 <?php 
                if( $rightColumn ): ?>

                    <a class="mobile-card" href="<?php echo esc_url( $rightColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $rightColumn['link']['target'] ); ?>">
                            
                        <?php echo wp_get_attachment_image( $rightBg['id'], array('200', '200'), "" );  ?>
                         <div class="title-wrapper">
                            <h2><?php  echo esc_html( $rightColumn['link']['title'] ); ?></h2>
                         </div>
                      
                    </a>
                <?php endif; ?>
            </section>

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
