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
            <div class="bg-image">
                <section>
                    <h2><a href="">Matchmaking Service</a></h2>
                </section>
            </div>
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
            <div class="bg-image">
                <section>
                    <h2><a href="">Staffing Agency</a></h2>
                </section>
            </div>
        </div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
