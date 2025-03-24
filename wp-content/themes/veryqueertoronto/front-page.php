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
        <div class="three-columns">
            <?php
            $leftColumn = get_field('left_column');
            
            if( $leftColumn ): ?>

            <div class="bg-image" style="background-image: url(<?php echo esc_url( $leftColumn['background_image']['url'] ); ?>)">
                <section>
                    <h2><a href="<?php echo esc_url( $leftColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $leftColumn['link']['target'] ); ?>"><?php echo esc_html( $leftColumn['link']['title'] ); ?></a></h2>
                </section>
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

                    <!-- the loop -->
                    <?php
                    while ( $eventsquery->have_posts() ) :
                        $eventsquery->the_post();
                    ?>
                        <a class="event-card" href="<?php echo esc_html( get_field('event_link') ); ?>" target="_blank">
                            <span class="event-meta">
                                <p><?php echo esc_html( get_field('event_date') ); ?></p>
                                <p><?php echo esc_html( get_field('event_time') ); ?></p>    
                            </span>
                            <h3><?php echo esc_html( get_field('event_title') ); ?></h3>
                        </a>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <?php wp_reset_postdata(); ?>
            
                </section>
            </div>
            <?php
            $rightColumn = get_field('right_column');
            
            if( $rightColumn ): ?>

            <div class="bg-image" style="background-image: url(<?php echo esc_url( $rightColumn['background_image']['url'] ); ?>)">
                <section>
                    <h2><a href="<?php echo esc_url( $rightColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $rightColumn['link']['target'] ); ?>"><?php echo esc_html( $rightColumn['link']['title'] ); ?></a></h2>
                </section>
            </div>
            <?php endif; ?>
        </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
