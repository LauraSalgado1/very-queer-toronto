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
            <?php
            $leftColumn = get_field('left_column');
            
            if( $leftColumn ): ?>

            <div class="bg-image">
                <img src="<?php echo esc_url($leftColumn['background_image']['url']) ?>" alt="<?php echo esc_attr( $leftColumn['background_image']['alt'] ); ?>" width="<?php echo esc_attr( $leftColumn['background_image']['width'] ); ?>" height="<?php echo esc_attr( $leftColumn['background_image']['height'] ); ?>" >
   
                <h2>
                    <a href="<?php echo esc_url( $leftColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $leftColumn['link']['target'] ); ?>">
                       <?php echo esc_html( $leftColumn['link']['title'] ); ?>
                    </a>
                </h2>

            </div>
            <?php endif; ?>
            <div class="event-column">
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

            <div class="bg-image">
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
